<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Arena</title>
        <link href="{{url('css/fontawesome-all.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{url('css/Home-style.css')}}"/>
        
    </head>

    <body>
<!---------------------------------------------------------- Starting header bar ---------------------------------------------------- !-->
        <header>

            <div class="right">
                @auth
                    <div style="float: right; margin: 15px;">{{ Auth::user()->fullname }}</div>
<!-- 
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: ;">
                                        <input type="submit" name="logout" value="logout">
                                    </form>
                                </div> -->
                @else
                <a href="{{ route('register') }}" target="_blank" style="color: #fff"><span>Register</span></a>
                   <!-- <a href="pages/regestration/reg.html" target="_blank" style="color: #fff"><span>Register</span></a>-->
                  <!--  <span style="padding-left: 0px">||</span>-->
                <span class="login" style="text-align: center;padding: 15px 34px ">
                    Login
                      <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <!-- @csrf -->
                        <ul>
                           <li> 
                             <input id="email" type="email" placeholder="Enter your email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                    </li>
                                    <li>   
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                    </li> 
                            <li>
                                
                                <button type="submit" >Login</button>
                            </li>
                        </ul> 
                    <form>   
                </span>
                                @endauth
            </div>
            <div class="left">
                <img src="{{url('css/images/images/headerlogo.png')}}"/>
            </div>
        </header>
<!----------------------------------------------------------- Ending header bar ---------------------------------------------------- !-->
        
        
<!-------------------------------------------- Starting header  ----------------------------------------------- !-->

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
                    <img src="{{url('css/images/images/team copy.png')}}"/>
                </div>
            </div>
        
        </header>
        
<!------------------------------------------------- Ending header  ------------------------------------------ !-->

<!---------------------------------------------- Starting Futures  ------------------------------------------ !-->

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
    
<!------------------------------------------------- Ending Futures  ------------------------------------------ !-->

<!------------------------------------------------- Starting active1 ------------------------------------------ !-->
        
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
                                <img src="{{url('css/images/images/playground.jpg')}}"/>
                                <p>اسم الملعب</p>
                                <p>المنطقه</p>
                                <p>سعر الساعه</p>
                                <input type="button" value="احجز" />
                            </li>

                            <li>
                                <img src="{{url('css/images/images/playground.jpg')}}"/>
                                <p>اسم الملعب</p>
                                <p>المنطقه</p>
                                <p>سعر الساعه</p>
                                <input type="button" value="احجز" />
                            </li>

                            <li>
                                <img src="{{url('css/images/images/playground.jpg')}}"/>
                                <p>اسم الملعب</p>
                                <p>المنطقه</p>
                                <p>سعر الساعه</p>
                                <input type="button" value="احجز" />
                            </li>

                            <li>
                                <img src="{{url('css/images/images/playground.jpg')}}"/>
                                <p>اسم الملعب</p>
                                <p>المنطقه</p>
                                <p>سعر الساعه</p>
                                <input type="button" value="احجز" />
                            </li>

                            <li>
                                <img src="{{url('css/images/images/playground.jpg')}}"/>
                                <p>اسم الملعب</p>
                                <p>المنطقه</p>
                                <p>سعر الساعه</p>
                                <input type="button" value="احجز" />
                            </li>

                            <li>
                                <img src="{{url('css/images/images/playground.jpg')}}"/>
                                <p>اسم الملعب</p>
                                <p>المنطقه</p>
                                <p>سعر الساعه</p>
                                <input type="button" value="احجز" />
                            </li>

                            <li>
                                <img src="{{url('css/images/images/playground.jpg')}}"/>
                                <p>اسم الملعب</p>
                                <p>المنطقه</p>
                                <p>سعر الساعه</p>
                                <input type="button" value="احجز" />
                            </li>
                        </ul>
                        
                   
                </div>
            
            </div>
        </section>        

        
<!------------------------------------------------ Ending active -------------------------------------------- !-->
        
        
<!------------------------------------------------- Starting active2 ---------------------------------------- !-->

        <section class="active2">
            <div class="futures_background2">
                <div class="cont" >
                    <div id="map" style="width: 100%; height: 500px;"></div>
                    
                </div>
            
            </div>
        </section>
    
        
<!------------------------------------------------- Starting active2 ----------------------------------------- !-->

        
<!------------------------------------------------- Starting active3 ----------------------------------------- !-->

        <section class="active3">
            <div class="futures_background3">
                <div class="cont">
                    <div class="img-cont">
                        <img src="{{url('css/images/images/playground.jpg')}}"/>
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
                        
                            {{csrf_field()}}
                        <li>
                            <select id="selectPG">
                                <optgroup label="الملعب" style="background: #fff;color: #6e1bad"/>
                               @foreach($background as $bg)
                                <option  class="playground" value="{{$bg->id}}">{{$bg->name}}</option>
                                @endforeach
                             
                            </select>
                            
                        </li>
                        
                        <li>
                            <select id="selectPG_Day">
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
                            <select id="selectPG_date">
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
                            <select id="selectPG_duration">
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
       
    <section class="active4">
        <div class="futures_background4">
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
        

        <section class="playgrounds">
            <img src="{{url('css/images/images/playgrounds.PNG')}}"/>
            <div class="background">
                <div>
                    <span class="top">الملاعب</span>
                    <p class="arabic">قم بمشاهدة الملاعب<br/>للتعرف على جودتها قبل الحجز</p>
                    <a href="/pgs" target="_blank "><button>المزيد</button></a>
                </div>
                
            </div>
        </section>


        <section class="champs">
            <img src="{{url('css/images/images/champs.PNG')}}"/>
            <div class="background">
                <div>
                    <span class="arabic">الدورات</span>
                    <p class="arabic">تعرف على الدورات المقامه حاليا <br/>للاشتراك مع فريقك</p>
                    <a href="/pgs" target="_blank"><button>المزيد</button></a>
                </div>
            
            </div>       
        </section>
        

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
                    
                    <img src="{{url('css/images/images/contactlogo.PNG')}}"/>
                </ul>
            </div>
        </section>
        

        

        <section class="footer">
            
        </section>

        <script src="{{url('js/JS/jquery.min.js')}}"></script>
        <script src="{{url('js/JS/plugins.js')}}"></script>
        <script type="text/javascript">
            let center = {lat:0, lng:0};
            let map;
            let directionsDisplay;
            let directionsService;
            var Mmarkers=[];
            let url="/getPG";
            function initMap(){

                // initialize map
                map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 15,
                });
                directionsDisplay = new google.maps.DirectionsRenderer({
                  map: map
                });

               

                // add all markers to the map
                // get all plots from database
                $.ajax({
                    type:"get",
                    url:url,
                    success:function(response){
                        markers = response;
                        for(var i=0; i<markers.length; i++){
                            data = {
                                lat: markers[i].lat, 
                                lng: markers[i].lng,
                                content: "<h3><img width='100' height='60' src='uploads/"+markers[i].profile_image+"'><br>name: " + markers[i].name + "</h3> address: " + markers[i].region  + "<br>Day Price: " + markers[i].day_price 
                                + "<br>Night Price: " + markers[i].night_price + "<br>Contact Phone: " + markers[i].contact_phone
                                
                            };
                            addMarker(data);
                        }
                    }
                });
                // keep updating position of the user and set the center of the map
                function success(pos) { 
                    center = {lat:pos.coords.latitude, lng:pos.coords.longitude};
                    // console.log(center);
                    map.setCenter(center);
                }
                posID = navigator.geolocation.watchPosition(success);
                // nearPlots();
            }

            function addMarker(data){
                var pos = new google.maps.LatLng(data.lat,data.lng);
                var marker = new google.maps.Marker({
                    position: pos,
                    map:map,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    zoomControl: false,
                    streetViewControl: false,
                    mapTypeControl: false,
                });

                if(data.content){
                    var infoWindow = new google.maps.InfoWindow({
                        content: data.content
                    });

                    marker.addListener('mouseover', function(){
                        infoWindow.open(map, marker);
                    });
                    marker.addListener('click', function(){
                        infoWindow.close(map, marker);
                    });
                }
                Mmarkers.push(marker);
            }


$("#selectPG_Day").on('change', function(){
    var pg_id = $('#selectPG').val();
    var day = $('#selectPG_Day').val();
       
       var token = $('input[name=_token]').val();
            $.ajax({
                method  : 'post',
                url     : '/play_ground',
                data    :{pg_id:pg_id, day:day, _token:token},
                success : function(response){
                console.log(response);

                $('#selectPG_date').empty();
                var hour = 6.0;
                var ch = "am"; 
                for(let i=0; i<36;++i){
                    if(hour > 12)ch = "pm";
                    if(response.indexOf(hour) > -1){
                        $('#selectPG_date').append('<option value="'+hour+'" disabled>'+hour+ ' '+ ch +'</option>')
                    }else{
                        $('#selectPG_date').append('<option value="'+hour+'">'+hour+ ' '+ ch +'</option>')
                    }
                    hour+=0.5;
                }
                } ,
                error : function(data){
                    console.log('hna'+ data);
                }

    });
        });

$("#reserve").on('click', function(){
    var pg_id = $('#selectPG').val();
    var day = $('#selectPG_Day').val();
    var date = $('#selectPG_date').val();
    var duration = $('#selectPG_duration').val();
       
       var token = $('input[name=_token]').val();
            $.ajax({
                method  : 'post',
                url     : '/book_play_ground',
                data    :{pg_id:pg_id, date:date, duration:duration, day:day, _token:token},
                success : function(response){
                    alert(response);
                    window.location = "/home";
                } ,
                error : function(data){
                    console.log('hna'+ data);
                }

    });
});

        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3r3iI3Y6---PKPZ1LsuLrPQ1sCUrIrDU&callback=initMap"></script>
    </body> 

</html>



