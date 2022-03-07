<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/styles/category/categoryCard.css')}}">
</head>
<body>
    <form action=""> 
        <div class="container">

            <div class="row justify-content-end button-div mt-2 mx-1">
                <div class="col-12" >
                     <button  class="pre-next"> <i class="fa-solid fa-angles-right"></i></button>
                     <button  class="pre-next"><i class="fa-solid fa-angle-right"></i> </button>
                     <button  class="pre-next"><i class="fa-solid fa-angle-left"></i> </button>
                     <button  class="pre-next"><i class="fa-solid fa-angles-left"></i> </button>

                 </div>
             </div>


            <table>
                <tbody>
                    <tr>
                        <td><label for="">رمز الصنف</label></td>
                        <td><input type="text" class="form-control "></td>
                    </tr>
                    <tr>
                        <td><label for="">اسم الصنف</label></td>
                        <td><input type="text" class="form-control "></td>
                    </tr>
                    <tr>
                        <td><label for="">الصنف الرئيسي</label></td>
                        <td><input type="text" class="form-control "></td>
                    </tr>
                    <tr>
                        <td><label for="">ملاحظات</label></td>
                        <td><textarea name="" id="" rows="2" class="form-control"></textarea> </td>
                    </tr>
                </tbody>
            </table>

            <div class="row justify-content-center mt-4">
                <div class="col-lg-7 col-md-8 col-sm-12  justify-content-center   button-row" >
                    <button type="" class="btn btn-light ">حفظ</button>
                    <button type="" class="btn btn-light ">جديد</button>
                    <button type="" class="btn btn-light ">تعديل</button>
                    <button type="" class="btn btn-light ">حذف</button>
                    

                </div>

            </div>


        </div>
    </form>
    
</body>
</html>