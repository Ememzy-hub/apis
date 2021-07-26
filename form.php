<form action="https://etegram.com/apis/bringPaymentModal/index.php" method="POST">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Select courses:</label>
            <select name="json" type="text" class="form-control" id="recipient-name">
                    <?php
                    $json = array();
                    $json['amount'] = "10000";
                    $json['marchantId'] = "YOUR ETEGRAM USER ID";
                    $json['depositorsEmail'] = "cleint@email.com";
                    $json['depositorsPhone'] = "9009883838";
                    $json['currency'] = "NGN";
                    $json['refid'] = time();
                    $json['openType'] = "ETEGRAMPAY";
                    $json['chargeType'] = "chargeClient";
                    $json['redirectUrl'] = "https://callbackUrl.com/verify";
                    $json['meta'] = "any information you which to store";
                    $json = json_encode($json);
                    ?>
                <option value='<?php echo $json;?>'><?php echo $courses['name'];?>, NGN <?php echo $courses['amount'];?></option>
            </select>
          </div>
          <div class="form-group">
           <button type="text" class="btn btn-lg btn-block btn-primary" id="recipient-name">Pay With Etegram</button>
          </div>
    </form>
