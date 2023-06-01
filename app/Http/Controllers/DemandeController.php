<?php
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    public function store(Request $request)
    {
        // Validez et enregistrez les données de la demande
        // ...
        
        // Générez le fichier PDF
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('demande.pdf', ['demande' => $demande])->render());
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        
        // Enregistrez le fichier PDF sur le serveur
        $pdfPath = public_path('demandes/demande_'. $demande->id .'.pdf');
        file_put_contents($pdfPath, $dompdf->output());
        
        // Téléchargez le fichier PDF
        return response()->download($pdfPath)->deleteFileAfterSend();
    }
}
