<?php

ini_set('max_execution_time', 900); // 15 minutes

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Process\Exception\ProcessFailedException;

Route::post('/deploy', function (Request $request){
    $secret = env('DEPLOY_SECRET');
    $signature = 'sha256=' . hash_hmac('sha256', $request->getContent(), $secret);

    if (!hash_equals($signature, $request->header('X-Hub-Signature-256'))) {
        return response()->json(['error' => 'Invalid signature'], 403);
    } 
    
    $scriptPath = '/home/checklistoficial-acompanhamento/deploy.sh';
    $logPath = '/home/checklistoficial-acompanhamento/deploy.log';

    // Isso garante que tudo vá para o log e evita perda de saída por problemas de buffer do Laravel
    $command = "bash $scriptPath >> $logPath 2>&1";
    $backgroundCommand = "nohup $command > /dev/null 2>&1 &";

    $process = Process::fromShellCommandline($backgroundCommand)->setTimeout(3600)->run();

    return response()->json([
        "message" => "Deployment triggered in background. Logs available at deploy.log",
    ]);


})->name('deploy.webhook');