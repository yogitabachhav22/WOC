<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BuyaCar</title>
    <link rel="stylesheet" href="style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" href="data:text/css;charset=utf-8;base64,LypibGFuayov" data-href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.3/css/all.min.css">

</head>
<body>
    <div class="main">
        <nav>
            <div class="logo">
                <img src="car_logo.jpg">
            </div>
            <div class="nav_links">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Car Types</a></li>
                    <li><a href="#">Accessories</a></li> 
                    <li><a href="#">Renting from us</a></li> 
                </ul>
            </div>    
        </nav>

        <div class="information">
            <div class="circle">
                <div class="features one">
                    <img src="Car_Image.jpg">
                    <div>
                        <h1> Sports</h1>
                        <p>$100,000</p>
                    </div>
                </div>
                <div class="features two">
                    <img src="  Sport_car.jpg">
                    <div>
                        <h1> Hybrid</h1>
                        <p>$60,000</p>
                    </div>
                </div>
                <div class="features three">
                    <img src="Electric_car.jpg">
                    <div>
                        <h1> Electric</h1>
                        <p>$85,000</p>
                    </div>
                </div>
                <div class="features four">
                    <img src="PND.jpg">
                    <div>
                        <h1> Petrol</h1>
                        <p>$35,000</p>
                    </div>
                </div>
            </div>   
        </div> 
        <div id="ac-wrapper" style='display:none' class="reveal-modal">
            <form id="msform" method="post" action=" " name="myForm">
              
                <!-- Start Registration form -->
                <?php include('userRegistration.php') 
                ?>
               <!-- End Registration form -->
                <!-- fieldsets -->
                <!--<fieldset id="question-1">
                    <h4 class="fs-title">TO GET STARTED ANSWER TWO QUESTIONS</h4>
                    <h5 class="fs-subtitle">(How much debt are you in? ⬇)</h5>
                    <div class="vc_message_box ppcsingle vc_message_box-standard vc_message_box-rounded vc_color-info" bis_skin_checked="1"><div class="vc_message_box-icon" bis_skin_checked="1"><i class="fas fa-info-circle"></i></div><p>May not be suitable in all circumstances. Fees apply. Your credit rating may be affected</p><br/>
                 </div>
                    <input type="radio" onclick="PopUpSecondSlide('show')" name="debtAmount" id="debtAmount1" value="Less than 5,000" style="visibility:hidden;width: 0;position:absolute;"><label class="btn btn-color-cta w-100 next button-icon" for="debtAmount1">Less than £5,000</label> <br/>
                    <input type="radio" onclick="PopUpSecondSlide('show')" name="debtAmount" id="debtAmount2" value="5,001 to 20,000" style="visibility:hidden;width: 0;position:absolute;"><label class="btn btn-color-cta w-100 next button-icon" for="debtAmount2">£5,001 to £20,000</label> <br/>
                    <input type="radio" onclick="PopUpSecondSlide('show')" name="debtAmount" id="debtAmount3" value="More than 20,000" style="visibility:hidden;width: 0;position:absolute;"><label class="btn btn-color-cta w-100 next button-icon" for="debtAmount3">More than £20,000</label>  <br/> 
                                                </fieldset>                     
                <fieldset id="question-2" style='display:none'>
                    <h2 class="fs-title">How many debts do you have?</h2>
                    <h3 class="fs-subtitle">(Please select an option below)</h3>
                                                    <input type="radio" onclick="PopUpThirdSlide('show')" name="debts" id="debts1" value="Just 1" style="visibility:hidden;width: 0;position:absolute;"><label class="btn btn-color-cta w-100 next button-icon" for="debts1">Just 1</label> <br/>
                                                    <input type="radio" onclick="PopUpThirdSlide('show')" name="debts" id="debts2" value="2 or 3" style="visibility:hidden;width: 0;position:absolute;"><label class="btn btn-color-cta w-100 next button-icon" for="debts2">2 or 3</label><br/>
                    <input type="radio" onclick="PopUpThirdSlide('show')" name="debts" id="debts3" value="4 or more" style="visibility:hidden;width: 0;position:absolute;"><label class="btn btn-color-cta w-100 next button-icon" for="debts3">4 or more</label><br/>
                </fieldset>
                <fieldset id="client-details"- style='display:none'>
                    <h2 class="fs-title">GREAT! NOW LET'S FIND YOU A SOLUTION</h2>
                    <h3 class="fs-subtitle">We've helped 100,000+ people. Let us help you</h3>
                    <input type="text" id="fullname" name="fullname" maxlength="10" placeholder="First Name" required>
                    <span class="error err_name"></span>
                    
                    <input type="text" id="lastname" name="lastname" maxlength="10" placeholder="Last Name" required>
                    <span class="error err_lname"></span>
                    
                    <input type="tel" id="lfphonenumberPPC" name="telephone" placeholder="Phone Number" required>
                    
                    <input type="email" id="memail" name="email" placeholder="E-Mail" required>
                   
                    <br><br>
                    <div style="width:80%;" class="mx-auto" bis_skin_checked="1">
                       
                    </div>
                    
                    <input type="submit" id="submitbtn1" name="submit" class="submit subppc btn btn-color-cta w-80 text-white" value="Find Out More">
                     <p class="text-center" style="color:#000000;font-size:8pt;">By submitting this form, you agree to be contacted by phone, email, WhatsApp© or SMS and consent to our <a href="https://www.moneyadvisor.co.uk/privacy-policy/" target="_blank" bis_skin_checked="1">Privacy Policy</a></p>
                    <div class="mx-auto" style="padding:2% 0;width:80%;" bis_skin_checked="1">
                        <div class="row" bis_skin_checked="1">
                            <div class="col-sm-12 col-md-10" bis_skin_checked="1">				
                            </div>
                            <div class="col-sm-12 col-md-2" bis_skin_checked="1">
                                <img class="ssl-img" data-class="LazyLoad" src="https://www.moneyadvisor.co.uk/wp-content/uploads/blank-h.png" data-src="https://www.moneyadvisor.co.uk/wp-content/uploads/2018/09/ssl_certificate.png" width="111" height="33" alt="ssl_certificate">
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>

        </div>
    </div>-->
    <script>
        // When the user clicks on div, open the popup
        function PopUp(hideOrshow) {
            if (hideOrshow == 'hide') document.getElementById('ac-wrapper').style.display = "none";
            else {
                document.getElementById('ac-wrapper').removeAttribute('style');
                document.getElementById('question-2').setAttribute('style','display:none');
                document.getElementById('client-details').setAttribute('style','display:none');

            }
        }
        function PopUpSecondSlide(hideOrshow) {
            if (hideOrshow == 'hide') document.getElementById('ac-wrapper').style.display = "none";
            else {
                document.getElementById('ac-wrapper').removeAttribute('style');
                document.getElementById('question-2').removeAttribute('style');
                document.getElementById('client-details').setAttribute('style','display:none');
                document.getElementById('question-1').setAttribute('style','display:none');

            }
        
        }
        function PopUpThirdSlide(hideOrshow) {
            if (hideOrshow == 'hide') document.getElementById('ac-wrapper').style.display = "none";
            else {
                document.getElementById('ac-wrapper').removeAttribute('style');
                document.getElementById('client-details').removeAttribute('style');
                document.getElementById('question-2').setAttribute('style','display:none');
                document.getElementById('question-1').setAttribute('style','display:none');

            }        }
        $(document).ready(function(){
                setTimeout(function(){
                    PopUp('show');
            },1000); // 5000 to load it after 5 seconds from page load
        });
    </script>
</body>
</html>
