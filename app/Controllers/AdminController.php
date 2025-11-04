<?php namespace App\Controllers;

use App\Models\BukuTamuModels;

class AdminController extends BaseController
{
    public function index()
    {
        $model = new BukuTamuModels();
        $tanggal = $this->request->getGet('tanggal');

        if ($tanggal) {
            $data['tamu'] = $model->where('DATE(tanggal)', $tanggal)->findAll();
        } else {
            $data['tamu'] = $model->orderBy('tanggal', 'DESC')->findAll();
        }

        return view('bukutamu/list', $data);
    }

    public function exportCsv()
    {
        $model = new BukuTamuModels();
        $data = $model->findAll();

        $filename = 'buku_tamu_' . date('Ymd') . '.csv';
        header("Content-type: text/csv");
        header("Content-Disposition: attachment; filename=$filename");
        $output = fopen("php://output", "w");

        fputcsv($output, ['ID', 'Nama', 'Email', 'Pesan', 'Tanggal']);
        foreach ($data as $row) {
            fputcsv($output, $row);
        }
        fclose($output);
        exit;
    }
}