<?php

namespace App\Filament\Charts;

use App\Models\Resposta;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class IndicadoresSatisfacaoChart extends ApexChartWidget
{
    protected static ?string $heading = 'Indicadores de Satisfação';

    protected function getData(): array
    {
        // Consulta para contar as respostas de "Satisfação Geral"
        $data = Resposta::selectRaw('resposta, count(*) as count')
            ->whereIn('resposta', ['Satisfeito', 'Neutro', 'Insatisfeito'])
            ->groupBy('resposta')
            ->get();

        return [
            'series' => $data->pluck('count')->toArray(),
            'labels' => $data->pluck('resposta')->toArray(),
        ];
    }
}
