<?php 

//   عملت الكونديشن ده عشان اول مافتح ميجبليش warning  وكدة عشان اول ما بفتح الفيلدز بتبقى فاضية

if( isset($_Post['email']) && isset($_Post['fName']) && isset($_Post['lName']) && isset($_Post['age']) && isset($_Post['pass']) && $_Post['age']>0 ) {

    //  باخد الداتا من الفيلدز بقا عن طريق post , post work as associative array  واخزنها في متغيرات 
  
    $email=$_POST['email'];
    $fName=$_POST['fName']; 
    $lName=$_POST['lName']; 
    $age=$_POST['age']; 
    $pass=$_POST['pass'];     

} 

//هعمل فانكشن بقا مجمعة عشان اتشيك ع الداتا اللي هتدخل من كذا حاجة 

function cleanData($data){ 
    
      //htmlspecialchars:استخدمتها عشان لو اليوزر دخل داتا فيها html tag  ميطبقش التاج ده ع الداتا عشان ممكن هاكر يدخل سكريبت فيه كود يهكر حاجة او يبوظ حاجة ف ميعرفش بقا يطبق الاسكريبت ده لان الفانكشن هتعامل التاج كعلامة اصغر من واكبر من  وبالتالي لو حبينا نعرض الداتاهيظهر التاج زي ماهو يعني من غير تطبيقه ع الداتا
    $data=htmlspecialchars($data); 



      //trim: استخدمتها عشان لو اليوزر دخل داتا وفي قبلها مسافات او بعدها مسافات ف المسافات دي كلها اللي مالهاش لازمة تتمسح وكدة مش هياخد مكان في الداتا كتير ع الفاضي
    $data=trim($data); 



     // trip_tags: هنا بقا لو اليوزر دخل اي تاج في الداتا فهيشيل التاج كله خالص من الداتا ومش هيطبقه عكس ال  htmlspecialchars كانت بتبطل عمله ولكن بتظهره عادي 
    $data=strip_tags($data); 
 

    //stripcslashes : لو اليوزر مدخل اي باك سلاش في الداتا ف هتتشال
   $data=stripcslashes($data); 

    return $data;
}
echo ("Hi, ".cleanData($_POST['fName'])."<br>"."<br>"."Your Profile"."<br>"."first name: ".cleanData($_POST['fName'])."<br>"."last name: ".cleanData($_POST['lName'])."<br>"."age: ".cleanData($_POST['age'])."<br>"."password: ".cleanData($_POST['pass']));
?>