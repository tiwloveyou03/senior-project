<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<section>
    <div align="center">
        <div class="d-flex justify-content-center h-100">
            <div class="image_outer_container">
                <div class="image_inner_container">
                    <img src="{{ asset("/images/cintage.jpg") }}">
                </div>
                <br><br>
            </div>
        </div>
    </div>


    <h2 class ="text-center">CINTAGE SHOP</h2>
    <p class ="text-center">เลขที่บิล&nbsp;{{$order->order_id}}</p>
    <p class ="text-center">รายการจะหมดอายุ: {{$order->expire_at}}</p>




    <div class="text-center">

        @php
        $level = 0;
        if($order->status == "TO PAY"){
            $level = 1;
        }elseif($order->status == "TO CHECK"){
            $level = 2;
        }elseif($order->status == "TO CHECKFAIL"){
            $level = 3;
        }elseif($order->status == "TO SHIP"){
            $level = 4;
        }elseif($order->status == "COMPLETE"){
            $level = 5;
        }


        @endphp

        <div class="contrainer">
        <div class="movedown col">
            <i class="fa fa-credit-card @if($level >= 1) active-fa @endif" aria-hidden="true" ></i>
        </div>
        <span  class="line-center"></span>
        <div class="movedown col">
            <i class="fa fa-check-circle @if($level >= 2) active-fa @endif" aria-hidden="true"></i>
        </div>
        <span  class="line-center"></span>
        <div class="movedown col">
            <i class="fa fa-check-circle @if($level >= 4) active-fa @endif" aria-hidden="true"></i>
        </div>
        <span  class="line-center "></span>
        <div class="movedown col ">
            <i class="fa fa-truck @if($level >= 5) active-fa @endif" aria-hidden="true"></i>
        </div>
    <div class="text-center text-status">

        <div class="movedown-text ">
           ชำระเงิน
        </div>
        <span  class="line-center-text"></span>
        <div class="movedown-text ">
            ตรวจสอบ
        </div>
        <span  class="line-center-text "></span>
        <div class="movedown-text">
            จัดส่ง
        </div>
        <span  class="line-center-text "></span>
        <div class="movedown-text">
            สำเร็จ
        </div>
      </div>
    </div>
  </div>


    <div class="text-center list-group-item list-group-item-action active">
        <h5>สถานะของรายการซื้อ</h5>
        <span style="font-size: 30px">{{$order->statusName}}</span>
    </div>
</section>

<style>

    .active-fa{
        color: #0000F0;
    }

    .movedown{
        margin-top: 25px;
        font-size: 30px;
        display: inline-block;
        width: 55px;
    }
    .movedown-text{
        margin-top: 15px;
        font-size: 15px;
        display: inline-block;
        width: 60px;
    }

    .line-center-text{
        margin:0;
        padding:0 10px;
        display:inline-block;
        width: 140px;
    }

    .text-status{
        margin-top: -15px;
        margin-bottom: 15px;
    }

    .line-center{
        margin:0;padding:0 10px;
        background:#000;
        display:inline-block;
        width: 140px;
        margin-bottom: 10px;
        border-top:solid 1px black;
    }
</style>
