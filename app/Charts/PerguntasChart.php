<?php

namespace App\Filament\Charts;

use App\Models\Pergunta;
use App\Models\Resposta;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class PerguntasChart extends ApexChartWidget
{
    protected static ?string $heading = 'Respostas por Pergunta';

    protected function getData(): array
    {
        // Consulta para contar respostas agrupadas por pergunta
        $data = Pergunta::withCount('respostas')
            ->get()
            ->map(fn($pergunta) => [
                'name' => $pergunta->texto_pergunta,
                'y' => $pergunta->respostas_count,
            ]);

        return [
            'series' => [[
                'data' => $data->pluck('y')->toArray(),
            ]],
            'labels' => $data->pluck('name')->toArray(),
        ];
    }
}
