<?php

namespace App\Filament\Widgets;

use App\Models\Author;
use App\Models\Book;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BookStatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Books', Book::count())
                ->description('Seluruh buku terdaftar')
                ->icon('heroicon-o-book-open')
                ->color('primary'),

            Stat::make('Total Authors', Author::count())
                ->description('Seluruh penulis terdaftar')
                ->icon('heroicon-o-user-group')
                ->color('info'),

            Stat::make('Available', Book::where('status', 'available')->count())
                ->description('Buku tersedia')
                ->icon('heroicon-o-check-circle')
                ->color('success'),

            Stat::make('Borrowed', Book::where('status', 'borrowed')->count())
                ->description('Buku sedang dipinjam')
                ->icon('heroicon-o-clock')
                ->color('warning'),
        ];
    }
}