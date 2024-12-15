<?php

namespace App\Filament\Charts;

use App\Models\Resposta;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class ParticipacaoChart extends ApexChartWidget
{
    protected static ?string $heading = 'Análise de Participação';

    protected function getData(): array
    {
        // Consulta para calcular a participação nas avaliações
        $totalAlunos = 1000; // Exemplo de total de alunos
        $participantes = Resposta::distinct('aluno_id')->count();

        $participacao = ($participantes / $totalAlunos) * 100;

        return [
            'series' => [[
                'data' => [$participacao],
            ]],
            'labels' => ['Participação'],
        ];
    }
}

