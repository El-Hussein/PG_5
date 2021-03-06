<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Arena</title>
        <link href="css/css/fontawesome-all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/Home-style.css"/>
        
    </head>

    <body>
<!--  Starting header bar  !-->
        <header>
            <div class="right">
                <a href="pages/regestration/reg.html" target="_blank" style="color: #fff"><span>Register</span></a>
                <span style="padding-left: 0px">||</span>
                <span class="login" style="text-align: center;padding: 15px 34px ">
                    Login
                    <ul>
                       <li><input placeholder="Username"/></li> 
                       <li><input placeholder="Password" type="password"/></li> 
                       <li><button type="submit" >Login</button></li>
                    </ul>    
                </span>
            </div>
            <div class="left">
                <img src="images/headerlogo.png"/>
            </div>
        </header>
<!--  Ending header bar   !-->
        
        
<!-- Starting header  !-->

        <header class="header">
            <div class="overlay">
                
                <div class="right2 arabic">
                    <span>اول منصه الكترونيه</span>
                     <br/>
                    <span style="margin-right: 100px">لحجز</span>
                    <br/>
                    <span>الملاعب الخماسيه</span>
                    <br/>
                    <span style="margin-right: 100px">في اسوان</span>
                </div>
                <div class="left2">
                    <img src="images/team copy.png"/>
                </div>
            </div>
        
        </header>
        
<!-- Ending header      !-->

<!-- Starting Futures      !-->

        <div class="futures cont">
            
            <ul>
                <li class="Active4">
                    <span><i class="fas fa-sitemap fa-6x"></i></span>
                    <p>احجز مباريات دورتك كلها في مرة واحده</p>
                </li>
                
                
                <li class="Active3">
                    <span><i class="far fa-calendar-alt fa-7x"></i></span>
                    <p>احجز الملعب بتاريخ مسبقا</p>
                </li>
                
                <li class="Active2">
                <span><i class="fas fa-map-marker-alt fa-7x"></i></span>
                <p>تعرف على الملاعب القريبه منك</p>
                </li>
                
                <li class="Active1">
                    <script type="text/javascript">
function GetClock(){
var d=new Date();
var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

if(nhour==0){ap=" AM";nhour=12;}
else if(nhour<12){ap=" AM";}
else if(nhour==12){ap="  pm";}
else if(nhour>12){ap="  pm";nhour-=12;}

if(nmin<=9) nmin="0"+nmin;
if(nsec<=9) nsec="0"+nsec;

document.getElementById('clockbox').innerHTML=""+nhour+":"+nmin+":"+nsec+ap+"";
}

window.onload=function(){
GetClock();
setInterval(GetClock,1000);
}
</script>
<div id="clockbox"></div>


                    <p style="margin-top:37px; ">تحقق من الملاعب المتاحه في وقت محدد</p>
                </li>
            </ul>
           
        
         </div>
    
<!-- Ending Futures      !-->

<!-- Starting active1     !-->
        
<section class="active1">
            <div class="futures_background1">
                <div class="cont">
                        <select>

                            <option value="12">12:00 pm</option>
                                <option value="12.5">12:30 pm</option>
                                <option value="13">1:00 pm</option>
                                <option value="13.5">1:30 pm</option>
                                <option value="14">2:00 pm</option>
                                <option value="14.5">2:30 pm</option>
                                <option value="15">3:00 pm</option>
                                <option value="15.5">3:30 pm</option>
                                <option value="16">4:00 pm</option>
                                <option value="16.5">4:30 pm</option>
                                <option value="17">5:00 pm</option>
                                <option value="17.5">5:30 pm</option>
                                <option value="18">6:00 pm</option>
                                <option value="18.5">6:30 pm</option>
                                <option value="19">7:00 pm</option>
                                <option value="19.5">7:30 pm</option>
                                <option value="20">8:00 pm</option>
                                <option value="20.5">8:30 pm</option>
                                <option value="21">9:00 pm</option>
                                <option value="21.5">9:30 pm</option>
                                <option value="22">10:00 pm</option>
                                <option value="22.5">10:30 pm</option>
                                <option value="23">11:00 pm</option>
                                <option value="23.5">11:30 pm</option>
                                <option value="24">12:00 am</option>
                                <option value="24.5">12:30 am</option>
                                <option value="1">1:00 am</option>
                                <option value="1.5">1:30 am</option>
                                <option value="2">2:00 am</option>
                                <option value="2.5">2:30 am</option>
                                <option value="3">3:00 am</option>
                                <option value="3.5">3:30 am</option>
                                <option value="4">4:00 am</option>
                                <option value="4.5">4:30 am</option>
                                <option value="5">5:00 am</option>
                                <option value="5.5">5:30 am</option>
                                <option value="6">6:00 am</option>

                        </select>
                    <br/>
                    
                        <select>
                            <option>ساعه 1</option>
                            <option>2 ساعه</option>
                            <option>3 ساعه</option>
                            <option>4 ساعه</option>
                            <option>5 ساعه</option>
                            <option>6 ساعه</option>
                        </select>
                    
                    <br/>
                    <br/>
                    <div class="arabic" style="width:500px;background-color: #d5d5d5;float: right;">
                        لاحظ انه عند ضفط زر "احجز" سيتم ارسال بعض المعلومات الشخصيه لصاحب الملعب لتأكيد الحجز... ايضا عند عدم الحضور للملعب او عدم دفع سعر الحجز سيقوم صاحب الملعب بعمل حظر للاكونت الخاص بك من الحجز على هذا الملعب
                    <br/>
                    <input id="check" type="checkbox" style="float: right"/>
                    <label style="float: right">اوافق</label>
                    </div>
                    
                        <ul>
                            <li>
                                <img src="images/playground.jpg"/>
                                <p>اسم الملعب</p>
                                <p>المنطقه</p>
                                <p>سعر الساعه</p>
                                <input type="button" value="احجز" />
                            </li>

                            <li>
                                <img src="images/playground.jpg"/>
                                <p>اسم الملعب</p>
                                <p>المنطقه</p>
                                <p>سعر الساعه</p>
                                <input type="button" value="احجز" />
                            </li>

                            <li>
                                <img src="images/playground.jpg"/>
                                <p>اسم الملعب</p>
                                <p>المنطقه</p>
                                <p>سعر الساعه</p>
                                <input type="button" value="احجز" />
                            </li>

                            <li>
                                <img src="images/playground.jpg"/>
                                <p>اسم الملعب</p>
                                <p>المنطقه</p>
                                <p>سعر الساعه</p>
                                <input type="button" value="احجز" />
                            </li>

                            <li>
                                <img src="images/playground.jpg"/>
                                <p>اسم الملعب</p>
                                <p>المنطقه</p>
                                <p>سعر الساعه</p>
                                <input type="button" value="احجز" />
                            </li>

                            <li>
                                <img src="images/playground.jpg"/>
                                <p>اسم الملعب</p>
                                <p>المنطقه</p>
                                <p>سعر الساعه</p>
                                <input type="button" value="احجز" />
                            </li>

                            <li>
                                <img src="images/playground.jpg"/>
                                <p>اسم الملعب</p>
                                <p>المنطقه</p>
                                <p>سعر الساعه</p>
                                <input type="button" value="احجز" />
                            </li>
                        </ul>
                        
                   
                </div>
            
            </div>
        </section>        

        
<!-- Ending active     !-->
        
        
<!-- Starting active2  !-->

        <section class="active2">
            <div class="futures_background2">
                <div class="cont">
                    <ul>
                        <li>
                            <img id="place1" src="Futures/Gps.png"/>
                           
                        </li>
                    
                        <li>
                            <select>
                                <option value="1">التأمين</option>
                                <option value="2">الخزان</option>
                            </select>
                        </li>
                    </ul>
                </div>
            
            </div>
        </section>
    
        
<!-- Starting active2  !-->

        
<!-- Starting active3  !-->

        <section class="active3">
  --div class="futures_background3">
                <div class="cont">
                    <div class="img-cont">
                        <img src="images/playground.jpg"/>
                        <p>اسم الملعب المختار</p>
                    </div>
                    <ul>
                        <li>
                        
                        <div class="arabic" style="width:500px;background-color: #d5d5d5;float: right;">
                        لاحظ انه عند ضفط زر "احجز" سيتم ارسال بعض المعلومات الشخصيه لصاحب الملعب لتأكيد الحجز... ايضا عند عدم الحضور للملعب او عدم دفع سعر الحجز سيقوم صاحب الملعب بعمل حظر للاكونت الخاص بك من الحجز على هذا الملعب
                            <br/>
                            <input id="check" type="checkbox" style="float: right"/>
                            <label style="float: right">اوافق</label>
                        </div>
                    <br/><br/>
                        
                        </li>
                        
                        <li>
                            <select>
                                <optgroup label="الملعب" style="background: #fff;color: #6e1bad"/>
                                <option value="1">اسم الملعب</option>
                                <option value="2">اسم الملعب</option>
                                <option value="3">اسم الملعب</option>
                            </select>
                            
                        </li>
                        
                        <li>
                            <select>
                                <optgroup label="التاريخ" style="background: #fff;color: #6e1bad"/>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="20">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                            </select>
                            
                        </li>
                        
                        <li>
                            <select>
                                <option value="12">12:00 pm</option>
                                <option value="12.5">12:30 pm</option>
                                <option value="13">1:00 pm</option>
                                <option value="13.5">1:30 pm</option>
                                <option value="14">2:00 pm</option>
                                <option value="14.5">2:30 pm</option>
                                <option value="15">3:00 pm</option>
                                <option value="15.5">3:30 pm</option>
                                <option value="16">4:00 pm</option>
                                <option value="16.5">4:30 pm</option>
                                <option value="17">5:00 pm</option>
                                <option value="17.5">5:30 pm</option>
                                <option value="18">6:00 pm</option>
                                <option value="18.5">6:30 pm</option>
                                <option value="19">7:00 pm</option>
                                <option value="19.5">7:30 pm</option>
                                <option value="20">8:00 pm</option>
                                <option value="20.5">8:30 pm</option>
                                <option value="21">9:00 pm</option>
                                <option value="21.5">9:30 pm</option>
                                <option value="22">10:00 pm</option>
                                <option value="22.5">10:30 pm</option>
                                <option value="23">11:00 pm</option>
                                <option value="23.5">11:30 pm</option>
                                <option value="24">12:00 am</option>
                                <option value="24.5">12:30 am</option>
                                <option value="1">1:00 am</option>
                                <option value="1.5">1:30 am</option>
                                <option value="2">2:00 am</option>
                                <option value="2.5">2:30 am</option>
                                <option value="3">3:00 am</option>
                                <option value="3.5">3:30 am</option>
                                <option value="4">4:00 am</option>
                                <option value="4.5">4:30 am</option>
                                <option value="5">5:00 am</option>
                                <option value="5.5">5:30 am</option>
                                <option value="6">6:00 am</option>

                            </select>
                        
                        </li>
                    
                        <li>
                            <select>
                                <optgroup label="المده" style="background: #fff;color: #6e1bad"/>
                                <option value="1">1 ساعه</option>
                                <option value="2">2 ساعه</option>
                                <option value="3">3 ساعه</option>
                                <option value="4">4 ساعه</option>
                                <option value="5">5 ساعه</option>
                                <option value="6">6 ساعه</option>
                            </select>
                        
                        </li>
                        
                        <li>
                        
                            <input id="reserve" type="button" value="احجز" />
                        </li>
                    </ul>
                
                </div>
            
            </div>
        
        
        </section>
        
<!-- Starting active3  !-->
<!-- Starting active4  !-->
        
  --section class="active4">
  --div class="futures_background4">
            <div class="cont">
                <ul id="ulone">
                    <li>
                        <input type="text" style="margin-right: 20px; width: 300px;height: 20px;" class="arabic"/>
                        <label style="font-size: 20px;font-family: VIP-Hala-Bold;">اسم الدوره</label>
                        
                    </li>
                    <li>
                        <input type="text" class="arabic" style=" width: 300px;height: 20px;"/>
                        <label style="font-size: 20px;font-family: VIP-Hala-Bold;">الراعي للدوره</label>
                    
                        
                    
                    </li>
                    <li>
                        <input type="text" class="arabic" style=" width: 300px;height: 20px;"/>
                        <label style="font-size: 20px;font-family: VIP-Hala-Bold;">عدد الماتشات</label>
                    
                        
                    
                    </li>
                    
                    <li>
                        <input type="text" class="arabic" style=" width: 300px;height: 20px;margin-right: 10px;"/>
                        <label style="font-size: 20px;font-family: VIP-Hala-Bold;">رقم التواصل</label>
                    
                    </li>
            
                    <li>
                        <input type="text" class="arabic" style=" width: 300px;height: 20px;margin-right: 30px;"/>
                        <label style="font-size: 20px;font-family: VIP-Hala-Bold;">تاريخ البدء</label>
                    
                    </li>
                    
                    <li>
                        <input type="text" class="arabic" style=" width: 300px;height: 20px;"/>
                        <label style="font-size: 20px;font-family: VIP-Hala-Bold;">تاريخ الانتهاء</label>
                    
                    </li>
                    <li>
                        <input type="text" class="arabic" style=" width: 300px;height: 20px;"/>
                        <label style="font-size: 20px;font-family: VIP-Hala-Bold;margin-right: 65px;">الجائزة</label>
                        
                        
                    </li>
                        
                    
                    <li>
                        
                        <select class="arabic">
                            <option >1</option>
                        </select>    
                        
                        <labal style="font-size: 20px;font-family: VIP-Hala-Bold;">الماتش رقم</labal>
                    </li>
                    </ul>
                
                <ul id="ultwo">
                    
                        
                        <li class="arabic">
                            <select>
                                <optgroup label="الملعب" style="background: #fff;color: #6e1bad"/>
                                <option value="1">اسم الملعب</option>
                                <option value="2">اسم الملعب</option>
                                <option value="3">اسم الملعب</option>
                            </select>
                            
                        </li>
                        
                        <li class="arabic">
                            <select>
                                <optgroup label="التاريخ" style="background: #fff;color: #6e1bad"/>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="20">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                            </select>
                            
                        </li>
                        
                        <li class="arabic">
                            <select>
                                <option value="12">12:00 pm</option>
                                <option value="12.5">12:30 pm</option>
                                <option value="13">1:00 pm</option>
                                <option value="13.5">1:30 pm</option>
                                <option value="14">2:00 pm</option>
                                <option value="14.5">2:30 pm</option>
                                <option value="15">3:00 pm</option>
                                <option value="15.5">3:30 pm</option>
                                <option value="16">4:00 pm</option>
                                <option value="16.5">4:30 pm</option>
                                <option value="17">5:00 pm</option>
                                <option value="17.5">5:30 pm</option>
                                <option value="18">6:00 pm</option>
                                <option value="18.5">6:30 pm</option>
                                <option value="19">7:00 pm</option>
                                <option value="19.5">7:30 pm</option>
                                <option value="20">8:00 pm</option>
                                <option value="20.5">8:30 pm</option>
                                <option value="21">9:00 pm</option>
                                <option value="21.5">9:30 pm</option>
                                <option value="22">10:00 pm</option>
                                <option value="22.5">10:30 pm</option>
                                <option value="23">11:00 pm</option>
                                <option value="23.5">11:30 pm</option>
                                <option value="24">12:00 am</option>
                                <option value="24.5">12:30 am</option>
                                <option value="1">1:00 am</option>
                                <option value="1.5">1:30 am</option>
                                <option value="2">2:00 am</option>
                                <option value="2.5">2:30 am</option>
                                <option value="3">3:00 am</option>
                                <option value="3.5">3:30 am</option>
                                <option value="4">4:00 am</option>
                                <option value="4.5">4:30 am</option>
                                <option value="5">5:00 am</option>
                                <option value="5.5">5:30 am</option>
                                <option value="6">6:00 am</option>

                            </select>
                        
                        </li>
                    
                        <li class="arabic">
                            <select>
                                <optgroup label="المده" style="background: #fff;color: #6e1bad"/>
                                <option value="1">1 ساعه</option>
                                <option value="2">2 ساعه</option>
                                <option value="3">3 ساعه</option>
                                <option value="4">4 ساعه</option>
                                <option value="5">5 ساعه</option>
                                <option value="6">6 ساعه</option>
                            </select>
                        
                        </li>
                        
                        <li class="arabic">
                        
                            <input id="reserve" type="button" value="احجز" />
                        </li>
                </ul>
            </div>
        
        </div>
            
    </section>
        
        
<!-- Starting active4  !-->

        
<!-- Starting Playgrounds      !-->

        <section class="playgrounds">
            <img src="images/playgrounds.PNG"/>
            <div class="background">
                <div>
                    <span class="top">الملاعب</span>
                    <p class="arabic">قم بمشاهدة الملاعب<br/>للتعرف على جودتها قبل الحجز</p>
                    <a href="pages/PG/%D8%A7%D9%84%D9%85%D9%84%D8%A7%D8%B9%D8%A8.html" target="_blank "><button>المزيد</button></a>
                </div>
                
            </div>
        </section>

<!--- Ending Playgrounds      !-->
        
<!--- Starting Champs      !-->


        <section class="champs">
            <img src="images/champs.PNG"/>
            <div class="background">
                <div>
                    <span class="arabic">الدورات</span>
                    <p class="arabic">تعرف على الدورات المقامه حاليا <br/>للاشتراك مع فريقك</p>
                    <a href="pages/champs/%D8%A7%D9%84%D8%AF%D9%88%D8%B1%D8%A7%D8%AA.html" target="_blank"><button>المزيد</button></a>
                </div>
            
            </div>
        
        
        </section>
        
<!--- Ending Champs      !-->
        
<!--- Starting counter  !-->

        <section class="counter">
            <div class="overlay">
                <div class="cont">
                    <ul>
                        <li>
                            <i class="fas fa-futbol fa-7x"></i>
                            <p>20</p>
                            <p>ملعب</p>
                        </li>

                        <li>
                            <i class="fas fa-user fa-7x"></i>
                            <p>500</p>
                            <p>مستخدم</p>
                        </li>

                        <li>
                            <i class="fas fa-code fa-7x"></i>
                            <p>2000</p>
                            <p>سطر برمجي</p>
                        </li>

                        <li>
                            <i class="fas fa-coffee fa-7x"></i>
                            <p>90</p>
                            <p>فنجان قهوة</p>
                        </li>

                    </ul>
                </div>
        </div>
        </section>
        
<!-- Ending counter !>

<!     Starting contact  !-->
        <p class="contact-us">تواصل معنا</p>
        
        <section class="Contact">
            <div class="overlay2">
                <ul class="contact">
                    <li class="facebook">
                        <i class="fab fa-facebook fa-7x"></i>
                        <p>Arena</p>
                    </li>
                    <li class="twitter">
                        <i class="fa fa-mobile fa-7x"></i>
                        <p>Arena</p>
                    </li>
                    <li class="instagaram">
                        <i class="fab fa-instagram fa-7x"></i>
                        <p>Arena</p>
                    </li>
                    
                    <li class="phone">
                        <i class="fab fa-whatsapp fa-7x"></i>
                        <p>01019338228</p>
                    </li>
                    
                    <img src="images/contactlogo.PNG"/>
                </ul>
            </div>
        </section>
        
<!--     Ending contact  !-->

        
<!--     Starting Footer  !-->

        <section class="footer">
            
        </section>

<!--     Ending Footer  !-->
        <script src="JS/jquery.min.js"></script>
        <script src="JS/plugins.js"></script>
        
    </body>

</html>