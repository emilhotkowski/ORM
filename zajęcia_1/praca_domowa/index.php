<?php
require_once('samochod.php');

if (isset($_POST['dodaj'])) {
    $samochod = new Samochod($_POST['marka'],$_POST['model'],$_POST['rok'],$_POST['cena'],$_POST['waga'],$_POST['silnik']);
    $wynik = $samochod->zapisz();
    
    if ($wynik == true) {
        header("Location: index.php?komunikat=1");
    } else {
        die("Operacja się nie powiodła: " . $pdo->errorInfo());
	}
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Dodaj</title>
        <meta charset="utf-8">
    </head>
    <body>
		<?php if (isset($_GET['komunikat'])): ?>
			<p style='color:red; font-weight:bold;'>
                <?php if($_GET['komunikat'] == 1): ?>
                    Samochod zostal dodany.
                <?php endif; ?>
			</p>
		<?php endif; ?>
        <form method="post" action="">
            <table>
                <tr>
                    <td>Marka</td>
                    <td><input type="text" name="marka" /></td>
                </tr>
                <tr>
                    <td>Model</td>
                    <td><input type="text" name="model" /></td>
                </tr>
                <tr>
                    <td>Rok</td>
                    <td><input type="number" name="rok" /></td>
				</tr>
				<tr>
                    <td>Silnik</td>
					<td><input type="number" step="0.1" name="silnik" /></td>
                </tr>
				<tr>
                    <td>Cena</td>
                    <td><input type="number" name="cena" /></td>
				</tr>
				<tr>
                    <td>Waga</td>
                    <td><input type="number"name="waga" /></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="dodaj" value="Dodaj" /></td>
                </tr>
            </table>
        </form>
    </body>
</html>
