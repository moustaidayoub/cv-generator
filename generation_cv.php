
<?php
require('fpdf.php');
//recuperation des informations
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$situation=$_POST['situation'];
$nationalite=$_POST['nationalite'];
$datenaissance=$_POST['datenaissance'];
$adresse=$_POST['adresse'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$titre=$_POST['titre'];
$debut=array($_POST['debut1'],$_POST['debut2'],$_POST['debut3'],$_POST['debut4'],$_POST['debut5'],$_POST['debut6'],$_POST['debut7']);
$fin=array($_POST['fin1'],$_POST['fin2'],$_POST['fin3'],$_POST['fin4'],$_POST['fin5'],$_POST['fin6'],$_POST['fin7']);
$formations=array($_POST['for1'],$_POST['for2'],$_POST['for3'],$_POST['for4'],$_POST['for5'],$_POST['for6'],$_POST['for7']);
$detfor=array($_POST['detfor1'],$_POST['detfor2'],$_POST['detfor3'],$_POST['detfor4'],$_POST['detfor5'],$_POST['detfor6'],$_POST['detfor7']);
$debut_exp=array($_POST['debut_exp1'],$_POST['debut_exp2'],$_POST['debut_exp3'],$_POST['debut_exp4'],$_POST['debut_exp5'],$_POST['debut_exp6'],$_POST['debut_exp7']);
$fin_exp=array($_POST['fin_exp1'],$_POST['fin_exp2'],$_POST['fin_exp3'],$_POST['fin_exp4'],$_POST['fin_exp5'],$_POST['fin_exp6'],$_POST['fin_exp7']);
$exp=array($_POST['exp1'],$_POST['exp2'],$_POST['exp3'],$_POST['exp4'],$_POST['exp5'],$_POST['exp6'],$_POST['exp7']);
$detexp=array($_POST['detexp1'],$_POST['detexp2'],$_POST['detexp3'],$_POST['detexp4'],$_POST['detexp5'],$_POST['detexp6'],$_POST['detexp7']);
$langue=array($_POST['langue1'],$_POST['langue2'],$_POST['langue3'],$_POST['langue4'],$_POST['langue5'],$_POST['langue6']);
$niveau=array($_POST['niveau1'],$_POST['niveau2'],$_POST['niveau3'],$_POST['niveau4'],$_POST['niveau5'],$_POST['niveau6']);
$activite=array($_POST['activite1'],$_POST['activite2'],$_POST['activite3'],$_POST['activite4'],$_POST['activite5']);
$competences=array($_POST['competence1'],$_POST['competence2'],$_POST['competence3'],$_POST['competence4'],$_POST['competence5'],
$_POST['competence6'],$_POST['competence7'],$_POST['competence8'],$_POST['competence9'],$_POST['competence10'],$_POST['competence11'],
$_POST['competence12'],$_POST['competence13'],$_POST['competence14'],$_POST['competence15']);
$nivcomp=array($_POST['nivcomp1'],$_POST['nivcomp2'],$_POST['nivcomp3'],$_POST['nivcomp4'],$_POST['nivcomp5'],
$_POST['nivcomp6'],$_POST['nivcomp7'],$_POST['nivcomp8'],$_POST['nivcomp9'],$_POST['nivcomp10'],$_POST['nivcomp11'],
$_POST['nivcomp12'],$_POST['nivcomp13'],$_POST['nivcomp14'],$_POST['nivcomp15']);
//les extensions possibles pour la photo
//$extensions = array('.png', '.gif', '.jpg', '.jpeg');
//recuperation de l'extension du photo
//$extension = strrchr($_FILES['fichier']['name'], '.');
//la taille max du photo
//$taille_max=500000;
//creation d'un pdf
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetMargins(10,10);
$pdf->SetFont('times','B',20);
$pdf->SetTextColor(0,0,160);
/*
//teste de l'extension et de la taille de l'image
  if(in_array($extension, $extensions) && filesize($_FILES['fichier']['tmp_name'])<=$taille_max) //Si l'extension est dans le tableau
{
move_uploaded_file($_FILES["fichier"]["tmp_name"],"./photos/".$_FILES["fichier"]["name"]);
$pdf->image("./photos/".$_FILES["fichier"]["name"],170,15,25,30);
}*/
//infos persos
$pdf->Cell(40,10,$nom.' '.$prenom);
$pdf->Ln();
$pdf->SetFont('Arial','B',13);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(90,7,$situation.', '.$nationalite);
$pdf->Ln();
$pdf->Cell(90,7,'Date de naissance : '.$datenaissance);
$pdf->Ln();
$pdf->Cell(90,7,'Adresse : '.$adresse);
$pdf->Ln();
$pdf->Cell(90,7,'E-Mail : '.$email);
$pdf->Ln();
$pdf->Cell(90,7,'Tel : '.$tel);
//titre du cv
$pdf->ln();
$pdf->ln();
$pdf->SetTextColor(0,0,255);
$pdf->SetFont('Arial','B',23);
$pdf->Cell(200,7,$titre,0,0,'C');
//les formations
$pdf->ln();
$pdf->ln();
$pdf->SetTextColor(0,0,150);
$pdf->SetFont('Arial','U',18);
$pdf->Cell(70,7,'FORMATIONS',0,0);
$pdf->ln();
$pdf->SetFont('Arial','B',13);
$pdf->SetTextColor(0,0,0);
for($i=0;$i<count($debut);$i++)
{
if($debut[$i]!=null)
{
$pdf->Cell(170,7,'Du '.$debut[$i].' Au '.$fin[$i].' : '.$formations[$i]);
$pdf->ln();
$pdf->SetFont('Arial','',13);
$pdf->Cell(170,7,$detfor[$i]);
$pdf->SetFont('Arial','B',13);
$pdf->ln();
}
else
break;
}
//les experiences
$pdf->ln();
$pdf->SetTextColor(0,0,150);
$pdf->SetFont('Arial','U',18);
$pdf->Cell(70,7,'EXPERIENCES',0,0);
$pdf->ln();
$pdf->SetFont('Arial','B',13);
$pdf->SetTextColor(0,0,0);
for($i=0;$i<count($debut_exp);$i++)
{
if($debut_exp[$i]!=null)
{
$pdf->Cell(170,7,'Du '.$debut_exp[$i].' Au '.$fin_exp[$i].' : '.$exp[$i]);
$pdf->ln();
$pdf->SetFont('Arial','',13);
$pdf->Cell(170,7,$detexp[$i]);
$pdf->SetFont('Arial','B',13);
$pdf->ln();
}
else
break;
}
//les competences
$pdf->ln();
$pdf->SetTextColor(0,0,150);
$pdf->SetFont('Arial','U',18);
$pdf->Cell(70,7,'COMPETENCES',0,0);
$pdf->ln();
$pdf->SetFont('Arial','B',13);
$pdf->SetTextColor(0,0,0);
for($i=0;$i<count($competences);$i++)
{
if($competences[$i]!=null)
{
$pdf->Cell(170,7,$competences[$i].' : Niveau '.$nivcomp[$i]);
$pdf->ln();
}
else
break;
}
//les langues
$pdf->ln();
$pdf->SetTextColor(0,0,150);
$pdf->SetFont('Arial','U',18);
$pdf->Cell(70,7,'LANGUES',0,0);
$pdf->ln();
$pdf->SetFont('Arial','B',13);
$pdf->SetTextColor(0,0,0);
for($i=0;$i<count($langue);$i++)
{
if($langue[$i]!=null)
{
$pdf->Cell(170,7,$langue[$i].' : '.$niveau[$i]);
$pdf->ln();
}
else
break;
}
//autres activites

$pdf->ln();
$pdf->SetTextColor(0,0,150);
$pdf->SetFont('Arial','U',18);
$pdf->Cell(70,7,'AUTRES ACTIVITEES',0,0);
$pdf->ln();
$pdf->SetFont('Arial','B',13);
$pdf->SetTextColor(0,0,0);
for($i=0;$i<count($activite);$i++)
{
if($activite[$i]!=null)
{
$pdf->Cell(35,7,$activite[$i].' - ');
}
else
break;
}
ob_end_clean();
//return le pdf
$pdf->Output();
alert('Votre Cv a été généré avec succés ! ');
?>

