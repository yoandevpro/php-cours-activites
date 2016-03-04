<?php
/*****************************************/
/********** Conditions Simples ***********/
/*****************************************/
echo "CONDITIONS SIMPLES <br><br><br>";

$animal = "Chat";
echo "1.Est-ce un chat : ";
if($animal == "Chat"){
  //condition vraie
  echo "Oui";
}else{
  //condition fausse
  echo "Non";
}
echo "<br><br>";
//----------------------------------------

$animal = "Chien";
echo "2.Est-ce un chat : ";
if($animal == "Chat"){
  //condition vraie
  echo "Oui";
}else{
  //condition fausse
  echo "Non";
}
echo "<br><br>";

//----------------------------------------

$chat = true;
echo "3.Est-ce un chat : ";
if($chat == true){
  //condition vraie
  echo "Oui";
}else{
  //condition fausse
  echo "Non";
}
echo "<br><br>";

//----------------------------------------

$chat = true;
echo "4.Est-ce un chat : ";
if($chat){
  //condition vraie
  echo "Oui";
}else{
  //condition fausse
  echo "Non";
}
echo "<br><br>";

//----------------------------------------

$chat = false;
echo "5.Est-ce un chat : ";
if($chat){
  //condition vraie
  echo "Oui";
}else{
  //condition fausse
  echo "Non";
}
echo "<br><br>";
