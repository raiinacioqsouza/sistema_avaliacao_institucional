<?php

namespace App\Filament\Charts;

use App\Models\Professor;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class RankingsProfessoresChart extends ApexChartWidget
{
    protected static ?string $heading = 'Ranking de Professores';

    protected function getData(): array
    {
        // Consulta para calcular a média das avaliações dos professores
        $data = Professor::withAvg('respostas', 'nota')
            ->get()
            ->map(fn($professor) => [
                'name' => $professor->nome,
                'y' => $professor->respostas_avg_nota,
            ]);

        return [
            'series' => [[
                'data' => $data->pluck('y')->toArray(),
            ]],
            'labels' => $data->pluck('name')->toArray(),
        ];
    }
}

