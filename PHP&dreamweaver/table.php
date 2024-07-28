<?php
// $string = "my name is david";

// if(preg_match("/h..a/", "elephant")){
//     echo "yes";
// }
// else{
//     echo "no";
// }
// if(preg_match('/^hello/','why did i not say hello')){
//     echo"ok";
// }
// else{

//     echo"not ok";
// }
?>

<?php
// $string = "my name is david,david is my name";

// if(preg_match_all("/da(vi)do/",$string,$array)) {
//     echo $array[0][1];
// }
?>
<!-- ^ = to begin with
* =0 or more 
. = character
? =one or more 
| = or  -->
<?php


  // echo"  <table border ='2'>
  //       <tr>
  //       <td>Quick</td>
  //       <td colspan='2'>brown fox</td>
  //       <td>jumps</td>
  //       </tr>
  //       <tr>
  //       <td rowspan='3'>over the</td>
  //       <td>lazy</td>
  //       <td>dog</td>
  //       <td>and</td>
  //       </tr>
  //       <tr>
  //       <td>then</td>
  //       <td>it</td>
  //       <td>fall</td>
  //       </tr>
  //       <tr>
  //       <td colspan='3'>prey to preditor</td>
  //       </tr>
  //       </table>"

// echo" <table>
//         <tr>
//             <td>FirstName:</td>
//             <td><input type='text'></td>
//             <td><input type='text'></td>
//         </tr>

//         <tr>
//             <td><input type='text'></td>
            
//         </tr>
//         <tr>
//             <td>SecondName:</td>
//             <td><input type='text'></td>
//             <td><input type='text'></td>

//         </tr>

//         <tr>
//             <td><input type='text'></td>
//         </tr>
//     </table>"

$file=fopen("textfile.txt","r");


echo fgetc($file);
fseek($file,2,SEEK_CUR);
echo ftell($file);
echo fread($file,200)







?>