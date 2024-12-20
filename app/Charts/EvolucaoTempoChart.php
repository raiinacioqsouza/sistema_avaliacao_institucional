<?php

namespace App\Filament\Charts;

use App\Models\Resposta;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class EvolucaoTempoChart extends ApexChartWidget
{
    protected static ?string $heading = 'Evolução ao Longo do Tempo';

    protected function getData(): array
    {
        // Consulta para pegar a média de respostas por mês ou semestre
        $data = Resposta::selectRaw('MONTH(created_at) as month, AVG(nota) as average')
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        return [
            'series' => [[
                'name' => 'Média de Notas',
                'data' => $data->pluck('average')->toArray(),
            ]],
            'labels' => $data->pluck('month')->toArray(),
        ];
    }
}
