  <div class="cont_width" style="text-align:left">
      <div class="row">
          <div class="col-md-12">
              <div class="tab" role="tabpanel">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="active"><a href="#stage01" aria-controls="home" role="tab" data-toggle="tab">TOTAL MY TEAM MEMBERS</a></li>
                      <li role="presentation"><a href="#stage02" aria-controls="profile" role="tab" data-toggle="tab">ACTIVE MEMBERS</a></li>
                      <li role="presentation"><a href="#stage03" aria-controls="messages" role="tab" data-toggle="tab">INACTIVE MEMBERS</a></li>
                      <li role="presentation"><a href="#stage04" aria-controls="messages" role="tab" data-toggle="tab">DIRECT SPONSORED</a></li>
                      <li role="presentation"><a href="#stage05" aria-controls="messages" role="tab" data-toggle="tab">ALL TEAM MEMBERS</a></li>

                      <!-- <li role="presentation"><a href="#newTab" aria-controls="messages" role="tab" data-toggle="tab">NEW TAB</a></li> -->
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content tabs">
                      <div role="tabpanel" class="tab-pane fade in active toggleClass" id="newTab"></div>
                      <div role="tabpanel" class="tab-pane fade in active toggleClass" id="stage01">
                          <h1 class="h_fonts h_color resizeable_h" style="text-align:center"><?php echo "TOTAL MEMBERS " . $total_members; ?></h1>
                          <table id="total_members" class="table  display table-hover text-center">
                              <thead>
                                  <th style="width:10%;">Serial #</th>
                                  <th>Member ID</th>
                                  <th>Name</th>
                                  <th>Mobile</th>
                                  <th>Email</th>
                                  <th>Current Status</th>
                                  <th>Invited By</th> <!-- Added sponsor reference column -->
                              </thead>
                              <tbody>
                                  <?php
                                    $i = 1;
                                    // Reset pointer and use the recursive query result
                                    mysqli_data_seek($result_hierarchy, 0);
                                    while ($row = mysqli_fetch_assoc($result_hierarchy)):
                                        // Get status from original data or join with member_registration
                                        $status_query = "SELECT status FROM member_registration WHERE member_id = '" . $row['member_id'] . "'";
                                        $status_result = mysqli_query($link, $status_query);
                                        $status_row = mysqli_fetch_assoc($status_result);

                                        if ($status_row['status'] == '1') {
                                            $status = 'Active';
                                        } else if ($status_row['status'] == '2') {
                                            $status = 'Suspended';
                                        } else if ($status_row['status'] == '3') {
                                            $status = 'Cancelled';
                                        } else if ($status_row['status'] == '4') {
                                            $status = 'Lapsed';
                                        } else {
                                            $status = 'Inactive';
                                        }
                                    ?>
                                      <tr>
                                          <td><?= $i++; ?></td>
                                          <td><?= $row['member_id']; ?></td>
                                          <td><?= $row['first_name'] . ' ' . $row['last_name']; ?></td>
                                          <td><?= $row['contact_no_1'] ?? 'N/A'; ?></td> <!-- Added null check -->
                                          <td><?= $row['email']; ?></td>
                                          <td><?= $status ?></td>
                                          <td><?= $row['invited_by'] ?? 'Root'; ?></td> <!-- Show who invited them -->
                                      </tr>
                                  <?php endwhile; ?>
                              </tbody>

                          </table>
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="stage02">
                          <h1 class="h_fonts h_color resizeable_h" style="text-align:center"><?php echo "ACTIVE MEMBERS " . $total_active; ?></h1>

                          <table id="total_members" class="table  display table-hover text-center">
                              <thead>
                                  <th style="width:5%;">#</th>
                                  <th>Member ID</th>
                                  <th>Name</th>
                                  <th>Mobile</th>
                                  <th>Email</th>
                                  <th>Status</th>
                                  <th>Invited By</th>
                                  <th>Token Expiry</th>
                                  <th>Remaining</th>
                              </thead>
                              <tbody>
                                  <?php
                                    $i = 1;
                                    if (mysqli_num_rows($result_active_members) > 0) {
                                        mysqli_data_seek($result_active_members, 0);
                                        while ($row = mysqli_fetch_assoc($result_active_members)) {
                                            // Get the status dynamically from the database
                                            $status_query = "SELECT status FROM member_registration WHERE member_id = '" . $row['member_id'] . "'";
                                            $status_result = mysqli_query($link, $status_query);

                                            if ($status_result && $status_row = mysqli_fetch_assoc($status_result)) {
                                                switch ($status_row['status']) {
                                                    case '1':
                                                        $status = 'Active';
                                                        break;
                                                    case '2':
                                                        $status = 'Suspended';
                                                        break;
                                                    case '3':
                                                        $status = 'Cancelled';
                                                        break;
                                                    case '4':
                                                        $status = 'Lapsed';
                                                        break;
                                                    default:
                                                        $status = 'Inactive';
                                                        break;
                                                }
                                            } else {
                                                $status = 'Unknown'; // Handle query failure or missing data
                                            }
                                    ?>
                                          <tr>
                                              <td><?= $i++ ?></td>
                                              <td><?= $row['member_id'] ?></td>
                                              <td><?= $row['first_name'] . ' ' . $row['last_name'] ?></td>
                                              <td><?= $row['contact_no_1'] ?? 'N/A'; ?></td>
                                              <td><?= $row['email'] ?></td>
                                              <td><?= $status; ?></td>
                                              <td><?= $row['invited_by'] ?? 'Root'; ?></td>
                                              <td><?= $row['expiry_date'] ?? 'N/A'; ?></td>
                                              <td><?= $row['remaining_days'] ?? 'N/A'; ?></td>
                                          </tr>
                                      <?php
                                        }
                                    } else {
                                        ?>
                                      <tr>
                                          <td colspan="10" class="text-center">No active members found</td>
                                      </tr>
                                  <?php } ?>
                              </tbody>
                          </table>
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="stage03">
                          <h1 class="h_fonts h_color resizeable_h" style="text-align:center"><?php echo "INACTIVE " . $total_inactive; ?></h1>
                          <table id="total_members" class="table  display table-hover text-center">
                              <thead>
                                  <th style="width:15%;">Serial #</th>
                                  <th>Member ID</th>
                                  <th>Name</th>
                                  <th>Email</th>
                                  <th>Invited By</th>
                                  <th>Renew</th>
                              </thead>
                              <tbody>
                                  <?php
                                    $i = 1;
                                    // Ensure you're using the correct result variable (not $total_inactive)
                                    while ($row = mysqli_fetch_assoc($result_inactive_members)) {
                                        // Sanitize data
                                        $member_id = htmlspecialchars($row['member_id']);
                                        $name = htmlspecialchars($row['first_name'] . ' ' . $row['last_name']);
                                        $email = htmlspecialchars($row['email']);
                                        $invited_by = htmlspecialchars($row['invited_by'] ?? 'Root');
                                    ?>
                                      <tr>
                                          <td><?php echo $i++; ?></td>
                                          <td><?= $member_id; ?></td>
                                          <td><?= $name; ?></td>
                                          <td><?= $email; ?></td>
                                          <td><?= $invited_by; ?></td>
                                          <td><a href="http://localhost/wjcw/my_account/renew_membership.php">Link</a></td>
                                      </tr>
                                  <?php } ?>
                              </tbody>
                          </table>
                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="stage04">
                          <h1 class="h_fonts h_color resizeable_h" style="text-align:center"><?php echo "DIRECT SPONSORED " . $total_direct_sponsors; ?></h1>
                          <table id="total_members" class="table  display table-hover text-center">
                              <thead>
                                  <th style="width:10%;">Serial #</th>
                                  <th>Member ID</th>
                                  <th>Name</th>
                                  <th>Mobile</th>
                                  <th>Email</th>
                                  <th>Current Status</th>
                                  <th>Invited By</th>
                              </thead>
                              <tbody>
                                  <?php
                                    $i = 1;

                                    if (mysqli_num_rows($result_direct_sponsors) > 0) {
                                        while ($row = mysqli_fetch_assoc($result_direct_sponsors)) {
                                            // Determine status
                                            switch ($row['status']) {
                                                case '1':
                                                    $status = 'Active';
                                                    break;
                                                case '2':
                                                    $status = 'Suspended';
                                                    break;
                                                case '3':
                                                    $status = 'Cancelled';
                                                    break;
                                                case '4':
                                                    $status = 'Lapsed';
                                                    break;
                                                default:
                                                    $status = 'Inactive';
                                            }
                                    ?>
                                          <tr>
                                              <td><?= $i++; ?></td>
                                              <td><?= htmlspecialchars($row['member_id']) ?></td>
                                              <td><?= htmlspecialchars($row['first_name'] . ' ' . $row['last_name']) ?></td>
                                              <td><?= htmlspecialchars($row['contact_no_1'] ?? 'N/A') ?></td>
                                              <td><?= htmlspecialchars($row['email']) ?></td>
                                              <td><?= $status ?></td>
                                              <td><?= htmlspecialchars($row['sponser_reference'] ?? 'Root') ?></td>
                                          </tr>
                                      <?php
                                        }
                                    } else {
                                        ?>
                                      <tr>
                                          <td colspan="7" class="text-center text-muted py-3">
                                              No direct sponsors found
                                          </td>
                                      </tr>
                                  <?php } ?>
                              </tbody>

                          </table>

                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="stage05">
                          <h1 class="h_fonts h_color resizeable_h" style="text-align:center"><?php echo "ALL MEMBERS " . $all_total_members; ?></h1>
                          <table id="total_members" class="table  display table-hover text-center">
                          <thead>
                                  <th style="width:10%;">Serial #</th>
                                  <th>Member ID</th>
                                  <th>Name</th>
                                  <th>Mobile</th>
                                  <th>Email</th>
                                  <th>Current Status</th>
                                  <th>Invited By</th>
                              </thead>
                              <tbody>
                                  <?php
                                    $i = 1;

                                    if (mysqli_num_rows($result_total) > 0) {
                                        while ($row = mysqli_fetch_assoc($result_total)) {
                                            // Determine status
                                            switch ($row['status']) {
                                                case '1':
                                                    $status = 'Active';
                                                    break;
                                                case '2':
                                                    $status = 'Suspended';
                                                    break;
                                                case '3':
                                                    $status = 'Cancelled';
                                                    break;
                                                case '4':
                                                    $status = 'Lapsed';
                                                    break;
                                                default:
                                                    $status = 'Inactive';
                                            }
                                    ?>
                                          <tr>
                                              <td><?= $i++; ?></td>
                                              <td><?= htmlspecialchars($row['member_id']) ?></td>
                                              <td><?= htmlspecialchars($row['first_name'] . ' ' . $row['last_name']) ?></td>
                                              <td><?= htmlspecialchars($row['contact_no_1'] ?? 'N/A') ?></td>
                                              <td><?= htmlspecialchars($row['email'] ? $row['email'] : " " ) ?></td>
                                              <td><?= $status ?></td>
                                              <td><?= htmlspecialchars($row['sponser_reference'] ?? 'Root') ?></td>
                                          </tr>
                                      <?php
                                        }
                                    } else {
                                        ?>
                                      <tr>
                                          <td colspan="7" class="text-center text-muted py-3">
                                              No direct sponsors found
                                          </td>
                                      </tr>
                                  <?php } ?>
                              </tbody>

                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>


  <script>
      $(document).ready(function() {
          $('.display').DataTable({
              "ordering": false,
              "pageLength": 25

          });

          $('.cls_suspense').click(function() {
              var id = $(this).attr("id");
              var status = $.trim($(this).text());
              $.ajax({
                  url: "../../../ajax/suspend_active.php",
                  method: "POST",
                  data: {
                      id: id,
                      status: status
                  },
                  success: function(data, success) {
                      location.reload();
                  }

              })

          });
      });
  </script>