<?php
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

function viewRemoveTodoList()
{
    echo "MENGHAPUS TODO" . PHP_EOL;
    $pilihan = input("Nomor (x untuk batalkan)");

    if ($pilihan == "x") {
        echo "Batal Menghapus TODO";
    } else {
        $success = removeTodoList($pilihan);

        if ($success) {
            echo "Berhasil Menghapus TODO Nomor - $pilihan" . PHP_EOL;
        } else {
            echo "Gagal Menghapus TODO Nomor - $pilihan" . PHP_EOL;
        }
    }
}
