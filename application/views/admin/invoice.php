    
<!DOCTYPE html>
<html>
<head>
    <title>E-mail</title>
        
</head>
<body style="margin: 0;">

    <table width="100%" cellpadding="0" cellspacing="0">

        <tr>
            <td style="background-color:#fff">

                <!-- ========= Table content ========= -->


                <table cellpadding="0" cellspacing="0" style=" background: #fff;box-shadow: 0 0 5px 0 #ddd; margin-top: 30px; border-radius: 5px; " width="600" class="table-mobile" align="center">
                   

                    <!-- ========= Header ========= -->

                    <tr>
                        <td>

                            <table cellpadding="0" cellspacing="0" style="width: 96%;padding-top: 5px;padding-bottom: 5px;" class="table-mobile-small" align="center">
                                <tr>
                                    <td class="header-item">
                                        <img src="http://103.145.50.28/Ashish_dubey/Techeduxon/assets/user-assets/images/Techeduxon.png" alt="" width="150" style="padding:10px; " />
                                    </td>
                                    <td class="header-item">
                                        <p style="font-family:sans-serif;font-size:20px;font-weight:bold;text-transform:uppercase;margin-top:0;margin-bottom:0;color:#484848;text-align:right;">
                                            Invoice
                                        </p>
                                        <p style="font-family:sans-serif;font-size:12px;font-weight:normal;text-transform:uppercase;margin-top:0;margin-bottom:0;color:#484848;text-align:right;">
                                            <?= $data[0]->invoice ?>                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- ========= Divider ========= -->

                    <tr>
                        <td>
                            <table cellpadding="0" cellspacing="0" width="100%" align="center">
                                
                                <tr>
                                    <td style="border-bottom:1px solid #f8f8f8;" height="1"></td>
                                </tr>
                            </table>

                        </td>
                    </tr>

                    <!-- ========= Intro text ========= -->

                    <tr>
                        <td style="background:#f7f7f7;padding:20px;border-top:1px solid #eeeeee;">
                            <table cellpadding="0" cellspacing="0" class="table-mobile-small" align="center">

                                <tr>
                                    <td colspan="2">
                                        <p style="font-family:sans-serif;font-size:22px;font-weight:bold;text-transform:none;margin-top:0;margin-bottom:10px;color:#464951;text-align:left;">
                                            Your order is completed!!
                                        </p>
                                        <p style="font-family:sans-serif;font-size:14px;font-weight:normal;text-transform:none;margin-top:0;margin-bottom:20px;color:#464951;text-align:left;">
                                            Dear costumer, your payment for your online order placed on Techeduxon. Order and has been approved order reference number: <strong><?= $data[0]->invoice ?></strong>.
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- ========= User info ========= -->

                    <tr>
                        <td style="background:#ffffff;padding:20px;border-top:1px solid #eeeeee;border-bottom:1px solid #eeeeee;">
                            <table cellpadding="0" cellspacing="0" class="table-mobile-small" align="center">
                                <tr>
                                    <td width="50%" style="padding-right: 10px;" valign="top">
                                        <table cellpadding="0" cellspacing="0" width="100%" align="center">
                                            <tr>
                                                <td style="padding-top:5px;padding-bottom:5px;border-bottom:1px solid #f5f5f5;">
                                                    <p style="font-family:sans-serif;font-size:22px;font-weight:normal;text-transform:none;margin:0;color:#3a3d45;text-align:left;">
                                                        <strong>Shipping info</strong>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-top:5px;padding-bottom:5px;border-bottom:1px solid #f5f5f5;">
                                                    <p style="font-family:sans-serif;font-size:14px;font-weight:normal;text-transform:none;margin:0;color:#3a3d45;text-align:left;">
                                                        <strong>Name:</strong> <?= $data[0]->name ?>                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-top:5px;padding-bottom:5px;border-bottom:1px solid #f5f5f5;">
                                                    <p style="font-family:sans-serif;font-size:14px;font-weight:normal;text-transform:none;margin:0;color:#3a3d45;text-align:left;">
                                                        <strong>Phone:</strong> <?= $data[0]->phone_no ?>                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-top:5px;padding-bottom:5px;border-bottom:1px solid #f5f5f5;">
                                                    <p style="font-family:sans-serif;font-size:14px;font-weight:normal;text-transform:none;margin:0;color:#3a3d45;text-align:left;">
                                                        <strong>Email:</strong> <?= $data[0]->email ?>                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-top:5px;padding-bottom:5px;border-bottom:1px solid #f5f5f5;">
                                                    <p style="font-family:sans-serif;font-size:14px;font-weight:normal;text-transform:none;margin:0;color:#3a3d45;text-align:left;">
                                                        <strong>Address:</strong> <?= $data[0]->address1.' , '.$data[0]->address2.' , '.$data[0]->City.','.$data[0]->pin_code ?>                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td width="50%" style="padding-left: 10px;" valign="top">
                                        <table cellpadding="0" cellspacing="0" width="100%" align="center">
                                            <tr>
                                                <td style="padding-top:5px;padding-bottom:5px;border-bottom:1px solid #f5f5f5;">
                                                    <p style="font-family:sans-serif;font-size:22px;font-weight:normal;text-transform:none;margin:0;color:#3a3d45;text-align:left;">
                                                        <strong>Order details</strong>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-top:5px;padding-bottom:5px;border-bottom:1px solid #f5f5f5;">
                                                    <p style="font-family:sans-serif;font-size:14px;font-weight:normal;text-transform:none;margin:0;color:#3a3d45;text-align:left;">
                                                        <strong>Order no.:</strong> <?= $data[0]->id ?>                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-top:5px;padding-bottom:5px;border-bottom:1px solid #f5f5f5;">
                                                    <p style="font-family:sans-serif;font-size:14px;font-weight:normal;text-transform:none;margin:0;color:#3a3d45;text-align:left;">
                                                        <strong>Order date :</strong> <?= date('d-M-Y',strtotime($data[0]->order_date)) ?>                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-top:5px;padding-bottom:5px;border-bottom:1px solid #f5f5f5;">
                                                    <p style="font-family:sans-serif;font-size:14px;font-weight:normal;text-transform:none;margin:0;color:#3a3d45;text-align:left;">
                                                        <strong>Invoice total:</strong> ₹ <?= $data[0]->total ?>                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- ========= Booking details ========= -->

                    <tr>
                        <td style="background-color:#ffffff;">

                            <table cellpadding="0" cellspacing="0" width="100%" align="center">

                                <tbody>

                                    <!----------- product table header ----------->
                                    
                                    <tr class="product-header">
                                        <td  valign="middle" style="padding: 10px 0 10px 20px;background-color:#f7f7f7;">
                                            <p style="font-family:sans-serif;font-size:10px;font-weight:bold;text-transform:uppercase;margin:0;color:#3a3d45;text-align:left;">
                                                Product
                                            </p>
                                        </td>
                                        <td valign="middle" style="padding: 10px 0;background-color:#f7f7f7;">
                                            <p style="font-family:sans-serif;font-size:10px;font-weight:bold;text-transform:uppercase;margin:0;color:#3a3d45;text-align:left;">
                                                Quantity
                                            </p>
                                        </td>
                                        <td valign="middle" align="right" style="padding: 10px 20px 10px 0;background-color:#f7f7f7;">
                                            <p style="font-family:sans-serif;font-size:10px;font-weight:bold;text-transform:uppercase;margin:0;color:#3a3d45;text-align:right;">
                                                Price
                                            </p>
                                        </td>
                                    </tr>
                                

                                    <!--product-->
                                    <?php foreach($data as $val){ ?>
                                                                        <tr>
                                        <td style="width: 100%;border-bottom: 1px solid #eee;padding: 0 20px;" colspan="3">
                                            <table>
                                                <tbody>
                                                    
                                                        <tr>
                                                            <td width="200" valign="middle" class="product-image" style="width:200px;padding: 10px 0 10px 00px;">
                                                                <a href="#" style="margin:0;padding:0;text-decoration:none;">
                                                                    <img src="<?= base_url().'uploads/certificate/'.$val->image ?>" alt="" width="100" />
                                                                </a>
                                                            </td>
                                                            <td width="300" valign="middle" class="product-title">
                                                                <p style="font-family:sans-serif;font-size:18px;font-weight:bold;text-transform:uppercase;margin:0;color:#3a3d45;text-align:left;">
                                                                    <?= $val->title ?> * 1                                                                </p><!-- 
                                                                <p style="font-family:sans-serif;font-size:14px;font-weight:normal;text-transform:none;margin:0;color:#60636b;text-align:left;">
                                                                    Category item
                                                                </p> -->
                                                            </td>
                                                            <td width="100" style="padding: 10px 00px 10px 0;" valign="middle" class="product-price">
                                                                <p style="font-family:sans-serif;font-size:18px;font-weight:bold;text-transform:uppercase;margin:0;color:#3a3d45;text-align:right;">
                                                                    ₹ <?= $val->price ?>                                                                </p>
                                                            </td>
                                                        </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <?php } ?>




                                                                </tbody>


                            </table>
                        </td>
                    </tr>

                    <!-- ========= Booking price ========= -->

                    <tr>
                        <td style="background-color:#f7f7f7;color:#3a3d45;padding:20px 0;" class="footer-content">

                            <table cellpadding="0" cellspacing="0" style="padding:0 20px; width: 100%;" class="table-mobile-small" align="center">

                                <tr>
                                    <td style="padding-bottom:20px;">
                                        <table cellpadding="0" cellspacing="0" width="100%" align="center">
                                            <tr>
                                                <td width="50%" valign="top">
                                                    <p style="font-family:sans-serif;font-size:14px;font-weight:normal;text-transform:none;margin-top:0;margin-bottom:0;padding:3px 0;color:#3a3d45;text-align:left;">
                                                        <strong>Discount </strong>
                                                    </p>
                                                </td>
                                                <td width="50%" valign="top">
                                                    <p style="font-family:sans-serif;font-size:14px;font-weight:normal;text-transform:none;margin-top:0;margin-bottom:0;padding:3px 0;color:#3a3d45;text-align:right;">
                                                        ₹ 0 </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="50%" valign="top">
                                                    <p style="font-family:sans-serif;font-size:14px;font-weight:normal;text-transform:none;margin-top:0;margin-bottom:0;padding:3px 0;color:#3a3d45;text-align:left;">
                                                        <strong>Shipping</strong>
                                                    </p>
                                                </td>
                                                <td width="50%" valign="top">
                                                    <p style="font-family:sans-serif;font-size:14px;font-weight:normal;text-transform:none;margin-top:0;margin-bottom:0;padding:3px 0;color:#3a3d45;text-align:right;">
                                                        ₹ 0
                                                    </p>
                                                </td>
                                            </tr>

                                            <!-- <tr>
                                                <td width="50%" valign="top">
                                                    <p style="font-family:sans-serif;font-size:14px;font-weight:normal;text-transform:none;margin-top:0;margin-bottom:0;padding:3px 0;color:#3a3d45;text-align:left;">
                                                        <strong>GST</strong>
                                                    </p>
                                                </td>
                                                <td width="50%" valign="top">
                                                    <p style="font-family:sans-serif;font-size:14px;font-weight:normal;text-transform:none;margin-top:0;margin-bottom:0;padding:3px 0;color:#3a3d45;text-align:right;">
                                                        ₹ 10
                                                    </p>
                                                </td>
                                            </tr> -->
                                        </table>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding-top:20px; border-top:1px solid #dddddd">
                                        <table cellpadding="0" cellspacing="0" width="100%" align="center">
                                            <tr>
                                                <td width="50%" valign="top">
                                                    <p style="font-family:sans-serif;font-size:28px;font-weight:bold;text-transform:none;margin-top:0;margin-bottom:0;padding:0;color:#3a3d45;text-align:left;">
                                                        <strong>Total price</strong>
                                                    </p>
                                                </td>
                                                <td width="50%" valign="top">
                                                    <p style="font-family:sans-serif;font-size:28px;font-weight:bold;text-transform:none;margin-top:0;margin-bottom:0;padding:0;color:#3a3d45;text-align:right;">
                                                        ₹ <?= $data[0]->total ?>                                                    </p>
                                                </td>
                                            </tr>
                                            <!-- <tr>
                                                <td width="50%" valign="top">
                                                    <p style="font-family:sans-serif;font-size:14px;font-weight:normal;text-transform:none;margin-top:0;margin-bottom:0;padding:0;color:#a6acbb;text-align:left;">
                                                        <strong>You save</strong>
                                                    </p>
                                                </td>
                                                <td width="50%" valign="top">
                                                    <p style="font-family:sans-serif;font-size:14px;font-weight:normal;text-transform:none;margin-top:0;margin-bottom:0;padding:0;color:#a6acbb;text-align:right;">
                                                        ₹ 10                                                    </p>
                                                </td>
                                            </tr> -->
                                        </table>
                                    </td>
                                </tr>


                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding-top:20px;">

                            <table cellpadding="0" cellspacing="0" class="table-mobile-small" align="center">
                                <tr>
                                    <td>
                                        <p style="font-family:sans-serif;font-size:14px;font-weight:normal;text-transform:none;margin-top:0;margin-bottom:20px;padding:0;color:#484848;text-align:center;">
                                            Payments should be made within 30 days with one of the options below, or you can enter any note here if necessary, you have much space:
                                        </p>
                                        <p style="font-family:sans-serif;font-size:14px;font-weight:normal;text-transform:none;margin-top:0;margin-bottom:0;padding:0;color:#484848;text-align:center;">
                                            <strong>Payment Methods:</strong> Cheque, PayPal, WesternUnion <br />
                                            <strong>We accept:</strong> MasterCard, Visa, AmericanExpress <br />
                                        </p>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>

                    <tr>
                        <td height="25"></td>
                    </tr>
                </table>

                <!-- ========= Footer ========= -->

                <table cellpadding="0" cellspacing="0" class="table-mobile-small" align="center">
                    
                </table>

            </td>
        </tr>
    </table>    
</body>
</html>