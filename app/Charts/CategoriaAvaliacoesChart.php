<?php

namespace App\Filament\Charts;

use App\Models\Categoria;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class CategoriaAvaliacoesChart extends ApexChartWidget
{
    protected static ?string $heading = 'Avaliação por Categoria';

    protected function getData(): array
    {
        // Consulta para calcular a média de avaliação por categoria
        $data = Categoria::withAvg('perguntas.respostas', 'nota')
            ->get()
            ->map(fn($categoria) => [
                'name' => $categoria->nome,
                'y' => $categoria->perguntas_avg_nota,
            ]);

        return [
            'series' => [[
                'data' => $data->pluck('y')->toArray(),
            ]],
            'labels' => $data->pluck('name')->toArray(),
        ];
    }
}
