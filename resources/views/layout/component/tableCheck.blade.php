
<table id="ordertable" class="table table-bordered table-striped" style="width: 100%">
    <thead>
    <tr>
        <th>Order ID</th>
        <th>เบอร์โทรศัพท์</th>
        <th>วันที่เปิดบิล</th>
        <th>วันที่แก้ไข</th>
        <th>ยอดรวม</th>
        <th>หลักฐานการโอน</th>
        <th>สถานะ</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>

    <tr>
        @foreach($orders as $row)
            <td><a href="{{url("order")."/".$row->order_id}}">

                    {{$row->order_id}}

                </a> </td>
            <td>{{$row->phone}}</td>
            <!-- updated_at -->
            <td>{{$row->created_at}}</td>
            <td>{{$row->updated_at}}</td>
            <td>{{$row->product_cost}}</td>

            <th>
                <a href="#" data-toggle="modal" data-target="#myModal" >
                    <img class="image-click" width="150px" src="{{asset($row->slip_image_url)}}" alt="">
                </a>
            </th>
            <td>
               {{$row->statusName}}
            </td>
            <td>
                    <select class="status_select" data="{{$row->order_id}}">
                        <option  value='TO CHECK'>รอตรวจสอบ</option>
                        <option  value='TO SHIP'>ผ่าน</option>
                        <option  value='To CHECKFAIL'>ไม่ผ่าน</option>
                    </select>
                    <a href="{{url("orderproduct")."/".$row->order_id}}"><br>
                        <button type ="button" class="btn btn-primary">แก้ไข</button>
                    </a>
            </td>
    </tr>
    @endforeach
</table>


<script>


    $(".status_select").change(function () {

        var id = $(this).attr("data");
        var value = $(this).val();
        var url = "{{url('update')}}" + "?id=" + id  + "&status=" + value;

        var retVal = confirm("บันทึกการเปลี่ยนแปลงใช่หรือไม่ ?");
        if( retVal == true ) {
            window.location = url;
        }

    });

</script>
