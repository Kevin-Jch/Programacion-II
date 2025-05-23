<?php
require 'conexion.php';
try {
    $pdo->beginTransaction();
    $monto= 50;
    $IDCuenta1= isset($_GET['id']) ? $_GET['id'] : 1;
    $IDCuenta2= isset($_GET['id']) ? $_GET['id'] : 2;
    if ($IDCuenta1) {
        $sql = "SELECT saldo FROM cuentas WHERE id = :id ";
        $stmt = $pdo->prepare($sql); 
        $stmt->execute([':id' => $IDCuenta1]);

        $saldoCuenta1 = $stmt->fetch(PDO::FETCH_ASSOC);
        $saldoNuevoCuenta1 = $saldoCuenta1['saldo'] - $monto;
    }else{
        echo"Cuenta no encontrada";
    }

    $sql= "UPDATE cuentas SET saldo = :saldo WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':saldo' => $saldoNuevoCuenta1, ':id' => $IDCuenta1]);

    if ($IDCuenta2) {
        $sql = "SELECT saldo FROM cuentas WHERE id = :id ";
        $stmt = $pdo->prepare($sql); 
        $stmt->execute([':id' => $IDCuenta2]);

        $saldoCuenta2 = $stmt->fetch(PDO::FETCH_ASSOC);
        $saldoNuevoCuenta2 = $saldoCuenta2['saldo'] + $monto;
    }else{
        echo"Cuenta no encontrada";
    }

    $sql= "UPDATE cuentas SET saldo = :saldo WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':saldo' => $saldoNuevoCuenta2, ':id' => $IDCuenta2]);
    $pdo->commit();
} catch(PDOException $e){
    $pdo->rollBack();
    echo'Error: ' . $e->geTMessage() . '\n';
}
?>