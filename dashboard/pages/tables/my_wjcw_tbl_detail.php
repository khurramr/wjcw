<?php
include("my_wjcw_mysqli.php");
?>

<style>
li.active a {
    background: green !important;
    color: white !important;
    transition: none !important;
}
li.active a::before, li.active a::after {
    display: none;
}
.disabled {
    color: white !important;
    pointer-events: none;
    cursor: not-allowed;
}
.nav-tabs li {
    margin: 4px;
    width: 16%;
    text-align: center;
}
.tab-content {
    z-index: initial !important;
}
</style>
<div class="cont_width" style="text-align:left">
    <div class="row">
        <div class="col-md-12">
            <div class="tab" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#stage01"
                    aria-controls="home" role="tab" data-toggle="tab">Stage 01</a></li>
                    <li role="presentation"><a href="#stage02"
                    aria-controls="profile" role="tab" data-toggle="tab">Stage 02</a></li>
                    <li role="presentation"><a href="#stage03"
                    aria-controls="messages" role="tab" data-toggle="tab">Stage 03</a></li>
                    <li role="presentation"><a href="#stage04"
                    aria-controls="messages" role="tab" data-toggle="tab">Stage 04</a></li>
                    <li role="presentation"><a href="#stage05"
                    aria-controls="messages" role="tab" data-toggle="tab">Stage 05</a></li>
                    <li role="presentation"><a href="#stage06"
                    aria-controls="messages" role="tab" data-toggle="tab">Stage 06</a></li>
                    <li role="presentation"><a href="#stage07"
                    aria-controls="messages" role="tab" data-toggle="tab">Stage 07</a></li>
                    <li role="presentation"><a href="#stage08"
                    aria-controls="messages" role="tab" data-toggle="tab">Stage 08</a></li>
                    <li role="presentation"><a href="#stage09"
                    aria-controls="messages" role="tab" data-toggle="tab">Stage 09</a></li>
                    <li role="presentation"><a href="#stage10"
                    aria-controls="messages" role="tab" data-toggle="tab">Stage 10</a></li>
                    <li role="presentation"><a href="#stage11"
                    aria-controls="messages" role="tab" data-toggle="tab">Stage 11</a></li>
                    <li role="presentation"><a href="#stage12"
                    aria-controls="messages" role="tab" data-toggle="tab">Stage 12</a></li>
                </ul>
                <!-- <ul class="nav nav-tabs" role="tablist">

                </ul> -->
                <!-- Tab panes -->
                <div class="tab-content tabs">
                    <div role="tabpanel" class="tab-pane fade in active toggleClass" id="stage01">
                         <h1 class="h_fonts h_color resizeable_h" style="text-align:center">STAGE 01</h1>
                          <table id="received_history" class="table  display table-hover text-center">
                        <thead>
                            <th >Sr #</th>
                            <th>Sender ID</th>
                            <th>Sender Name</th>
                            <th>Amount</th>
                            <th>Method of Payment</th>
                            <!-- <th>Tracking Number</th>     -->
                            <th>Gift Donation Date</th>
                            <th>Note</th>
                            <th>Received</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                                <?php
                                    while ($row = mysqli_fetch_assoc($result_level1)){ ?>
                                    <tr>
                                    <td><?php  echo $row['id']; ?></td>
                                    <td><?php  echo $row['sent_by'] ?></td>
                                    <td><?php  echo $row['first_name'] . ' ' . $row['last_name'] ; ?></td>
                                    <td><?php  echo '£'.$row['amount']; ?></td>
                                    <td><?php  echo $row['method_of_payment'] ?></td>
                                    <td><?php  echo $row['dated'] ?></td>
                                    <td>
                                         <?php echo $row['remarks']?>
                                    </td>
                                    <td>
                                            <?php if($row['verified'] == 1){ ?>
                                            <button style="pointer-events: none;"  btn_verified="<?= $row['verified']; ?>" class="btn btn-success btn_verify">VERIFIED</button>                                
                                            <?php } else{?>
                                                <button disabled style="pointer-events: none;" class="btn btn-danger btn_verify">NOT VERIFIED</button>
                                            <?PHP } ?>

                                    </td>
                                    <td>
                                      <button class="btn btn-danger delete-note" data-id="<?php echo $row['id'];?>">Delete Note</button>
                                        <!--?php if ($row['remarks'] != '') {?-->
                                        <!--button class="btn btn-danger delete-note" data-id="<?php echo $row['id'];?>">Delete Note</button-->
                                        <!--?php } ?-->
                                    </td>
                                    </tr>
                                    <?php } ?>
                        </tbody>
                    </table>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="stage02">
                            <h1 class="h_fonts h_color resizeable_h" style="text-align:center">STAGE 02</h1>
                          <table id="received_history" class="table  display table-hover text-center">
                        <thead>
                            <th >Sr #</th>
                            <th>Sender ID</th>
                            <th>Sender Name</th>
                            <th>Amount</th>
                            <th>Method of Payment</th>
                            <!-- <th>Tracking Number</th>     -->
                            <th>Gift Donation Date</th>
                            <!-- <th style="width:15%; ">Receipt Date</th>     -->
                             <th>Note</th>
                             <th>Received</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                                 <?php
                                    while ($row = mysqli_fetch_assoc($result_level2)){ ?>
                                    <tr>
                                    <td><?php  echo $row['id']; ?></td>
                                    <td><?php  echo $row['sent_by'] ?></td>
                                    <td><?php  echo $row['first_name'] . ' ' . $row['last_name'] ; ?></td>
                                    <td><?php  echo '£'.$row['amount']; ?></td>
                                    <td><?php  echo $row['method_of_payment'] ?></td>
                                    <td><?php  echo $row['dated'] ?></td>
                                    <td>
                                        <?php echo $row['remarks']?>
                                    </td>
                                    <td>
                                            <?php if($row['verified'] == 1){ ?>
                                            <button style="pointer-events: none;"  btn_verified="<?= $row['verified']; ?>" class="btn btn-success btn_verify">VERIFIED</button>                                
                                            <?php } else{?>
                                                <button disabled style="pointer-events: none;" class="btn btn-danger btn_verify">NOT VERIFIED</button>
                                            <?PHP } ?>

                                    </td>
                                    <td>
                                        <button class="btn btn-danger delete-note" data-id="<?php echo $row['id'];?>">Delete Note</button>
                                        <!--<?php if ($row['remarks'] != '') {?>
                                        <button class="btn btn-danger delete-note" data-id="<?php echo $row['id'];?>">Delete Note</button>
                                        <?php } ?> -->
                                    </td>
                                    </tr>
                                    <?php } ?>
                        </tbody>
                    </table>

                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="stage03">
                        <h1 class="h_fonts h_color resizeable_h" style="text-align:center">STAGE 03</h1>
                         <table id="" class="table  display table-hover text-center">
                        <thead>
                            <th >Sr #</th>
                            <th>Sender ID</th>
                            <th>Sender Name</th>
                            <th>Amount</th>
                            <th>Method of Payment</th>
                            <!-- <th>Tracking Number</th>     -->
                            <th>Gift Donation Date</th>
                            <!-- <th style="width:15%; ">Receipt Date</th>     -->
                            <th>Note</th>
                            <th>Received</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                               <?php
                                    while ($row = mysqli_fetch_assoc($result_level3)){ ?>
                                    <tr>
                                    <td><?php  echo $row['id']; ?></td>
                                    <td><?php  echo $row['sent_by'] ?></td>
                                    <td><?php  echo $row['first_name'] . ' ' . $row['last_name'] ; ?></td>
                                    <td><?php  echo '£'.$row['amount']; ?></td>
                                    <td><?php  echo $row['method_of_payment'] ?></td>
                                    <td><?php  echo $row['dated'] ?></td>
                                    <td>
                                        <?php echo $row['remarks']?>
                                    </td>
                                    <td>
                                            <?php if($row['verified'] == 1){ ?>
                                            <button style="pointer-events: none;"  btn_verified="<?= $row['verified']; ?>" class="btn btn-success btn_verify">VERIFIED</button>                                
                                            <?php } else{?>
                                                <button disabled style="pointer-events: none;" class="btn btn-danger btn_verify">NOT VERIFIED</button>
                                            <?PHP } ?>

                                    </td>
                                    <td>
                                        <button class="btn btn-danger delete-note" data-id="<?php echo $row['id'];?>">Delete Note</button>
                                        <!--<?php if ($row['remarks'] != '') {?>
                                        <button class="btn btn-danger delete-note" data-id="<?php echo $row['id'];?>">Delete Note</button>
                                        <?php } ?> -->
                                    </td>
                                    </tr>
                                    <?php } ?>
                        </tbody>
                    </table>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="stage04">
                         <h1 class="h_fonts h_color resizeable_h" style="text-align:center">STAGE 04</h1>
                      <table id="" class="table  display table-hover text-center">
                        <thead>
                            <th >Sr #</th>
                            <th>Sender ID</th>
                            <th>Sender Name</th>
                            <th>Amount</th>
                            <th>Method of Payment</th>
                            <!-- <th>Tracking Number</th>     -->
                            <th>Gift Donation Date</th>
                            <!-- <th style="width:15%; ">Receipt Date</th>     -->
                            <th>Note</th>
                            <th>Received</th>
                            <th> Action</th>
                        </thead>
                        <tbody>
                              <?php
                                    while ($row = mysqli_fetch_assoc($result_level4)){ ?>
                                    <tr>
                                    <td><?php  echo $row['id']; ?></td>
                                    <td><?php  echo $row['sent_by'] ?></td>
                                    <td><?php  echo $row['first_name'] . ' ' . $row['last_name'] ; ?></td>
                                    <td><?php  echo '£'.$row['amount']; ?></td>
                                    <td><?php  echo $row['method_of_payment'] ?></td>
                                    <td><?php  echo $row['dated'] ?></td>
                                    <td>
                                          <?php echo $row['remarks']?>
                                    </td>
                                    <td>
                                            <?php if($row['verified'] == 1){ ?>
                                            <button style="pointer-events: none;"  btn_verified="<?= $row['verified']; ?>" class="btn btn-success btn_verify">VERIFIED</button>                                
                                            <?php } else{?>
                                                <button disabled style="pointer-events: none;" class="btn btn-danger btn_verify">NOT VERIFIED</button>
                                            <?PHP } ?>

                                    </td>
                                    <td>
                                        <button class="btn btn-danger delete-note" data-id="<?php echo $row['id'];?>">Delete Note</button>
                                        <!--<?php if ($row['remarks'] != '') {?>
                                        <button class="btn btn-danger delete-note" data-id="<?php echo $row['id'];?>">Delete Note</button>
                                        <?php } ?> -->
                                    </td>
                                    </tr>
                                    <?php } ?>
                        </tbody>
                    </table>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="stage05">
                    <h1 class="h_fonts h_color resizeable_h" style="text-align:center">STAGE 05</h1>
                      <table id="" class="table  display table-hover text-center">
                        <thead>
                            <th >Sr #</th>
                            <th>Sender ID</th>
                            <th>Sender Name</th>
                            <th>Amount</th>
                            <th>Method of Payment</th>
                            <!-- <th>Tracking Number</th>     -->
                            <th>Gift Donation Date</th>
                            <!-- <th style="width:15%; ">Receipt Date</th>     -->
                            <th>Note</th>
                            <th>Received</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                              <?php
                                    while ($row = mysqli_fetch_assoc($result_level5)){ ?>
                                    <tr>
                                    <td><?php  echo $row['id']; ?></td>
                                    <td><?php  echo $row['sent_by'] ?></td>
                                    <td><?php  echo $row['first_name'] . ' ' . $row['last_name'] ; ?></td>
                                    <td><?php  echo '£'.$row['amount']; ?></td>
                                    <td><?php  echo $row['method_of_payment'] ?></td>
                                    <td><?php  echo $row['dated'] ?></td>
                                    <td>
                                         <?php echo $row['remarks']?>
                                    </td>
                                    <td>
                                            <?php if($row['verified'] == 1){ ?>
                                            <button style="pointer-events: none;"  btn_verified="<?= $row['verified']; ?>" class="btn btn-success btn_verify">VERIFIED</button>                                
                                            <?php } else{?>
                                                <button disabled style="pointer-events: none;" class="btn btn-danger btn_verify">NOT VERIFIED</button>
                                            <?PHP } ?>

                                    </td>
                                    <td>
                                        <button class="btn btn-danger delete-note" data-id="<?php echo $row['id'];?>">Delete Note</button>
                                        <!--<?php if ($row['remarks'] != '') {?>
                                        <button class="btn btn-danger delete-note" data-id="<?php echo $row['id'];?>">Delete Note</button>
                                        <?php } ?> -->
                                    </td>
                                    </tr>
                                    <?php } ?>
                        </tbody>
                    </table>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="stage06">
                    <h1 class="h_fonts h_color resizeable_h" style="text-align:center">STAGE 06</h1>
                      <table id="" class="table  display table-hover text-center">
                        <thead>
                            <th >Sr #</th>
                            <th>Sender ID</th>
                            <th>Sender Name</th>
                            <th>Amount</th>
                            <th>Method of Payment</th>
                            <!-- <th>Tracking Number</th>     -->
                            <th>Gift Donation Date</th>
                            <!-- <th style="width:15%; ">Receipt Date</th>     -->
                            <th>Note</th>
                            <th>Received</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                              <?php
                                    while ($row = mysqli_fetch_assoc($result_level6)){ ?>
                                    <tr>
                                    <td><?php  echo $row['id']; ?></td>
                                    <td><?php  echo $row['sent_by'] ?></td>
                                    <td><?php  echo $row['first_name'] . ' ' . $row['last_name'] ; ?></td>
                                    <td><?php  echo '£'.$row['amount']; ?></td>
                                    <td><?php  echo $row['method_of_payment'] ?></td>
                                    <td><?php  echo $row['dated'] ?></td>
                                    <td>
                                        <?php echo $row['remarks']?>
                                    </td>
                                    <td>
                                            <?php if($row['verified'] == 1){ ?>
                                            <button style="pointer-events: none;"  btn_verified="<?= $row['verified']; ?>" class="btn btn-success btn_verify">VERIFIED</button>                                
                                            <?php } else{?>
                                                <button disabled style="pointer-events: none;" class="btn btn-danger btn_verify">NOT VERIFIED</button>
                                            <?PHP } ?>

                                    </td>
                                    <td>
                                        <button class="btn btn-danger delete-note" data-id="<?php echo $row['id'];?>">Delete Note</button>
                                        <!--<?php if ($row['remarks'] != '') {?>
                                        <button class="btn btn-danger delete-note" data-id="<?php echo $row['id'];?>">Delete Note</button>
                                        <?php } ?>-->
                                    </td>
                                    </tr>
                                    <?php } ?>
                        </tbody>
                    </table>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="stage07">
                    <h1 class="h_fonts h_color resizeable_h" style="text-align:center">STAGE 07</h1>
                      <table id="" class="table  display table-hover text-center">
                        <thead>
                            <th >Sr #</th>
                            <th>Sender ID</th>
                            <th>Sender Name</th>
                            <th>Amount</th>
                            <th>Method of Payment</th>
                            <!-- <th>Tracking Number</th>     -->
                            <th>Gift Donation Date</th>
                            <!-- <th style="width:15%; ">Receipt Date</th>     -->
                            <th>Note</th>
                            <th>Received</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                              <?php
                                    while ($row = mysqli_fetch_assoc($result_level7)){ ?>
                                    <tr>
                                    <td><?php  echo $row['id']; ?></td>
                                    <td><?php  echo $row['sent_by'] ?></td>
                                    <td><?php  echo $row['first_name'] . ' ' . $row['last_name'] ; ?></td>
                                    <td><?php  echo '£'.$row['amount']; ?></td>
                                    <td><?php  echo $row['method_of_payment'] ?></td>
                                    <td><?php  echo $row['dated'] ?></td>
                                    <td>
                                        <?php echo $row['remarks']?>
                                    </td>
                                    <td>
                                            <?php if($row['verified'] == 1){ ?>
                                            <button style="pointer-events: none;"  btn_verified="<?= $row['verified']; ?>" class="btn btn-success btn_verify">VERIFIED</button>                                
                                            <?php } else{?>
                                                <button disabled style="pointer-events: none;" class="btn btn-danger btn_verify">NOT VERIFIED</button>
                                            <?PHP } ?>

                                    </td>
                                    <td>
                                        <button class="btn btn-danger delete-note" data-id="<?php echo $row['id'];?>">Delete Note</button>
                                        <!--<?php if ($row['remarks'] != '') {?>
                                        <button class="btn btn-danger delete-note" data-id="<?php echo $row['id'];?>">Delete Note</button>
                                        <?php } ?>-->
                                    </td>
                                    </tr>
                                    <?php } ?>
                        </tbody>
                        </table>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="stage08">
                    <h1 class="h_fonts h_color resizeable_h" style="text-align:center">STAGE 08</h1>
                      <table id="" class="table  display table-hover text-center">
                        <thead>
                            <th >Sr #</th>
                            <th>Sender ID</th>
                            <th>Sender Name</th>
                            <th>Amount</th>
                            <th>Method of Payment</th>
                            <!-- <th>Tracking Number</th>     -->
                            <th>Gift Donation Date</th>
                            <!-- <th style="width:15%; ">Receipt Date</th>     -->
                            <th>Note</th>
                            <th>Received</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                              <?php
                                    while ($row = mysqli_fetch_assoc($result_level8)){ ?>
                                    <tr>
                                    <td><?php  echo $row['id']; ?></td>
                                    <td><?php  echo $row['sent_by'] ?></td>
                                    <td><?php  echo $row['first_name'] . ' ' . $row['last_name'] ; ?></td>
                                    <td><?php  echo '£'.$row['amount']; ?></td>
                                    <td><?php  echo $row['method_of_payment'] ?></td>
                                    <td><?php  echo $row['dated'] ?></td>
                                    <td>
                                        <?php echo $row['remarks']?>
                                    </td>
                                    <td>
                                            <?php if($row['verified'] == 1){ ?>
                                            <button style="pointer-events: none;"  btn_verified="<?= $row['verified']; ?>" class="btn btn-success btn_verify">VERIFIED</button>                                
                                            <?php } else{?>
                                                <button disabled style="pointer-events: none;" class="btn btn-danger btn_verify">NOT VERIFIED</button>
                                            <?PHP } ?>

                                    </td>
                                    <td>
                                        <button class="btn btn-danger delete-note" data-id="<?php echo $row['id'];?>">Delete Note</button>
                                        <!--<?php if ($row['remarks'] != '') {?>
                                        <button class="btn btn-danger delete-note" data-id="<?php echo $row['id'];?>">Delete Note</button>
                                        <?php } ?>-->
                                    </td>
                                    </tr>
                                    <?php } ?>
                        </tbody>
                        </table>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="stage09">
                    <h1 class="h_fonts h_color resizeable_h" style="text-align:center">STAGE 09</h1>
                      <table id="" class="table  display table-hover text-center">
                        <thead>
                            <th >Sr #</th>
                            <th>Sender ID</th>
                            <th>Sender Name</th>
                            <th>Amount</th>
                            <th>Method of Payment</th>
                            <!-- <th>Tracking Number</th>     -->
                            <th>Gift Donation Date</th>
                            <!-- <th style="width:15%; ">Receipt Date</th>     -->
                            <th>Note</th>
                            <th>Received</th>
                            <th>Action </th>
                        </thead>
                        <tbody>
                              <?php
                                    while ($row = mysqli_fetch_assoc($result_level9)){ ?>
                                    <tr>
                                    <td><?php  echo $row['id']; ?></td>
                                    <td><?php  echo $row['sent_by'] ?></td>
                                    <td><?php  echo $row['first_name'] . ' ' . $row['last_name'] ; ?></td>
                                    <td><?php  echo '£'.$row['amount']; ?></td>
                                    <td><?php  echo $row['method_of_payment'] ?></td>
                                    <td><?php  echo $row['dated'] ?></td>
                                    <td>
                                        <?php echo $row['remarks']?>
                                    </td>
                                    <td>
                                            <?php if($row['verified'] == 1){ ?>
                                            <button style="pointer-events: none;"  btn_verified="<?= $row['verified']; ?>" class="btn btn-success btn_verify">VERIFIED</button>                                
                                            <?php } else{?>
                                                <button disabled style="pointer-events: none;" class="btn btn-danger btn_verify">NOT VERIFIED</button>
                                            <?PHP } ?>

                                    </td>
                                    <td>
                                        <button class="btn btn-danger delete-note" data-id="<?php echo $row['id'];?>">Delete Note</button>
                                        <!-- <?php if ($row['remarks'] != '') {?>
                                        <button class="btn btn-danger delete-note" data-id="<?php echo $row['id'];?>">Delete Note</button>
                                        <?php } ?> -->
                                    </td>
                                    </tr>
                                    <?php } ?>
                        </tbody>
                        </table>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="stage10">
                    <h1 class="h_fonts h_color resizeable_h" style="text-align:center">STAGE 10</h1>
                      <table id="" class="table  display table-hover text-center">
                        <thead>
                            <th >Sr #</th>
                            <th>Sender ID</th>
                            <th>Sender Name</th>
                            <th>Amount</th>
                            <th>Method of Payment</th>
                            <!-- <th>Tracking Number</th>     -->
                            <th>Gift Donation Date</th>
                            <!-- <th style="width:15%; ">Receipt Date</th>     -->
                            <th>Note</th>
                            <th>Received</th>
                            <th>Action </th>
                        </thead>
                        <tbody>
                              <?php
                                    while ($row = mysqli_fetch_assoc($result_level10)){ ?>
                                    <tr>
                                    <td><?php  echo $row['id']; ?></td>
                                    <td><?php  echo $row['sent_by'] ?></td>
                                    <td><?php  echo $row['first_name'] . ' ' . $row['last_name'] ; ?></td>
                                    <td><?php  echo '£'.$row['amount']; ?></td>
                                    <td><?php  echo $row['method_of_payment'] ?></td>
                                    <td><?php  echo $row['dated'] ?></td>
                                    <td>
                                        <?php echo $row['remarks']?>
                                    </td>
                                    <td>
                                            <?php if($row['verified'] == 1){ ?>
                                            <button style="pointer-events: none;"  btn_verified="<?= $row['verified']; ?>" class="btn btn-success btn_verify">VERIFIED</button>                                
                                            <?php } else{?>
                                                <button disabled style="pointer-events: none;" class="btn btn-danger btn_verify">NOT VERIFIED</button>
                                            <?PHP } ?>

                                    </td>
                                    <td>
                                        <button class="btn btn-danger delete-note" data-id="<?php echo $row['id'];?>">Delete Note</button>
                                        <!-- <?php if ($row['remarks'] != '') {?>
                                        <button class="btn btn-danger delete-note" data-id="<?php echo $row['id'];?>">Delete Note</button>
                                        <?php } ?> -->
                                    </td>
                                    </tr>
                                    <?php } ?>
                        </tbody>
                        </table>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="stage11">
                    <h1 class="h_fonts h_color resizeable_h" style="text-align:center">STAGE 11</h1>
                      <table id="" class="table  display table-hover text-center">
                        <thead>
                            <th >Sr #</th>
                            <th>Sender ID</th>
                            <th>Sender Name</th>
                            <th>Amount</th>
                            <th>Method of Payment</th>
                            <!-- <th>Tracking Number</th>     -->
                            <th>Gift Donation Date</th>
                            <!-- <th style="width:15%; ">Receipt Date</th>     -->
                            <th>Note</th>
                            <th>Received</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                              <?php
                                    while ($row = mysqli_fetch_assoc($result_level11)){ ?>
                                    <tr>
                                    <td><?php  echo $row['id']; ?></td>
                                    <td><?php  echo $row['sent_by'] ?></td>
                                    <td><?php  echo $row['first_name'] . ' ' . $row['last_name'] ; ?></td>
                                    <td><?php  echo '£'.$row['amount']; ?></td>
                                    <td><?php  echo $row['method_of_payment'] ?></td>
                                    <td><?php  echo $row['dated'] ?></td>
                                    <td>
                                        <?php echo $row['remarks']?>
                                    </td>
                                    <td>
                                            <?php if($row['verified'] == 1){ ?>
                                            <button style="pointer-events: none;"  btn_verified="<?= $row['verified']; ?>" class="btn btn-success btn_verify">VERIFIED</button>                                
                                            <?php } else{?>
                                                <button disabled style="pointer-events: none;" class="btn btn-danger btn_verify">NOT VERIFIED</button>
                                            <?PHP } ?>

                                    </td>
                                    <td>
                                        <button class="btn btn-danger delete-note" data-id="<?php echo $row['id'];?>">Delete Note</button>
                                        <!--<?php if ($row['remarks'] != '') {?>
                                        <button class="btn btn-danger delete-note" data-id="<?php echo $row['id'];?>">Delete Note</button>
                                        <?php } ?>-->
                                    </td>
                                    </tr>
                                    <?php } ?>
                        </tbody>
                        </table>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="stage12">
                    <h1 class="h_fonts h_color resizeable_h" style="text-align:center">STAGE 12</h1>
                      <table id="" class="table  display table-hover text-center">
                        <thead>
                            <th >Sr #</th>
                            <th>Sender ID</th>
                            <th>Sender Name</th>
                            <th>Amount</th>
                            <th>Method of Payment</th>
                            <!-- <th>Tracking Number</th>     -->
                            <th>Gift Donation Date</th>
                            <!-- <th style="width:15%; ">Receipt Date</th>     -->
                            <th>Note</th>
                            <th>Received</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                              <?php
                                    while ($row = mysqli_fetch_assoc($result_level12)){ ?>
                                    <tr>
                                    <td><?php  echo $row['id']; ?></td>
                                    <td><?php  echo $row['sent_by'] ?></td>
                                    <td><?php  echo $row['first_name'] . ' ' . $row['last_name'] ; ?></td>
                                    <td><?php  echo '£'.$row['amount']; ?></td>
                                    <td><?php  echo $row['method_of_payment'] ?></td>
                                    <td><?php  echo $row['dated'] ?></td>
                                    <td>
                                        <?php echo $row['remarks']?>
                                    </td>
                                    <td>
                                            <?php if($row['verified'] == 1){ ?>
                                            <button style="pointer-events: none;"  btn_verified="<?= $row['verified']; ?>" class="btn btn-success btn_verify">VERIFIED</button>                                
                                            <?php } else{?>
                                                <button disabled style="pointer-events: none;" class="btn btn-danger btn_verify">NOT VERIFIED</button>
                                            <?PHP } ?>

                                    </td>
                                    <td>
                                        <button class="btn btn-danger delete-note" data-id="<?php echo $row['id'];?>">Delete Note</button>
                                        <!-- <?php if ($row['remarks'] != '') {?>
                                        <button class="btn btn-danger delete-note" data-id="<?php echo $row['id'];?>">Delete Note</button>
                                        <?php } ?> -->
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
     $(".delete-note").click(function() {
      var clickedElement = $(this);
      var deleteTokenId = clickedElement[0].getAttribute("data-id");
      $.ajax({
          url:"my_wjcw_delete_remarks.php",
          method:"POST",
          data:{donation_id: deleteTokenId},
          success:function(data, success){
            swal("Note deleted successfully!", {
                          icon: "success",
                          showConfirmButton: false
                        })
                        .then(() => {
                            location.reload();
                        });
          }
      })
    });
    </script>
