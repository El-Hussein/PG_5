<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>الملاعب</title>
        <link rel="stylesheet" href="{{url('pg/css/pg.css')}}"/>
        <style type="text/css">
        @font-face{
            font-family:Jazeel-Bold;
            src:url('{{url("pg/Fonts/Jazeel-Bold.otf")}}');
        }

        @font-face{
            font-family:SOGAND;
            src:url('{{url("pg/Fonts/SOGAND.ttf")}}');
        }

        @font-face{
            font-family:VIP-Hala-Bold;
            src:url('{{url("pg/Fonts/VIP-Hala-Bold.otf")}}');
        }
        </style>
    </head>
    <body>
<!-- ----------------------------------------- Starting Header ---------------------------------------------- !-->
        <header>
            <header>
            <ul class="right">
                <a href="" style="color: #fff"><li>الدورات</li></a>
                <a href="" style="color: #fff"><li class="active">الملاعب</li></a>
                <a href="/home" style="color: #fff"><li>الرئيسيه</li></a>
            </ul>
            <div class="left">
                <img src="{{url('pg/images/headerlogo.png')}}"/>
            </div>
        </header>
        </header>
<!-- ----------------------------------------- Ending Header ---------------------------------------------- !-->

        
<!-- ----------------------------------------- Starting body ---------------------------------------------- !-->

        <section class="content">
            <div class="cont">
                <ul>
                    @foreach($pgs as $pg)
                        <li>
                            <img src="uploads/{{$pg->profile_image}}"/>
                            <p class="arabic">{{$pg->name}}</p>
                            <p class="arabic">{{$pg->region}}</p>
                            <p class="arabic">day Price: {{$pg->day_price}}</p>
                            <p class="arabic">night Price: {{$pg->night_price}}</p>
                        </li>
                    @endforeach
                    

                    
                    
                </ul>
            
                
            </div>
        
        </section>

<!-- ----------------------------------------- Ending body ---------------------------------------------- !-->

    
        
        
        
        <script src="{{url('pg/js/jquery.min.js')}}"></script>
        <script src="{{url('pg/js/pg-plugins.js')}}"></script>
    </body>
    
</html>