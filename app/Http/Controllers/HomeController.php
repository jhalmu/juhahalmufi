<?php
declare(strict_types=1);
// app/Http/Controllers/HomeController.php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

final class HomeController
{
    public function __invoke(): Factory|View
    {
        return view("home", [
            "projects" => [
                [
                    "name" => "Orangedinos",
                    "status" => "Live",
                    "url" => "https://juhahalmu.fi",
                    "description" =>
                        "Henkilökohtainen blogi ja portfolio. Phoenix LiveView, autentikointi, RSS. juhahalmu.fi",
                ],
                [
                    "name" => "dividends-o-matic",
                    "status" => "Live",
                    "url" => "https://dividends-o-matic.com",
                    "description" =>
                        "Osinko- ja portfolioseuranta Interactive Brokers -datalle. Phoenix LiveView, CSV.",
                ],
                [
                    "name" => "Homelab & infra",
                    "status" => "Ongoing",
                    "url" => null,
                    "description" =>
                        "TrueNAS, Docker, Tailscale, Hetzner, N8N, Bazzite. Koti-infra ja palvelimet.",
                ],
                [
                    "name" => "Geneettinen analyysi",
                    "status" => "Ongoing",
                    "url" => null,
                    "description" =>
                        "Metylaatiopaneelit, FamilyTreeDNA, Geneanet-sukupuu, pitkäikäisyystutkimus.",
                ],
            ],

            "tags" => [
                ["name" => "Elixir", "style" => "pine"],
                ["name" => "Phoenix LiveView", "style" => "pine"],
                ["name" => "Claude Code", "style" => "amber"],
                ["name" => "Ash Framework", "style" => "default"],
                ["name" => "PostgreSQL", "style" => "default"],
                ["name" => "DaisyUI", "style" => "default"],
                ["name" => "Docker", "style" => "default"],
                ["name" => "TrueNAS", "style" => "default"],
                ["name" => "Tailscale", "style" => "default"],
                ["name" => "Hetzner", "style" => "default"],
                ["name" => "Caddy", "style" => "default"],
                ["name" => "Coolify", "style" => "default"],
                ["name" => "CachyOS", "style" => "default"],
                ["name" => "Niri", "style" => "default"],
            ],

            "directions" => [
                [
                    "title" => "Koodi",
                    "text" =>
                        "Elixir, Phoenix LiveView, Ash. Backend-sovelluksia BEAM-alustalla. Oma blogi ja osinkotyökalu tuotannossa.",
                ],
                [
                    "title" => "Kuva",
                    "text" =>
                        "Anamorfinen valokuvaus. Automatisoidut työnkulut desqueezeaukseen. Fujifilm X-T5 + Sirui 35mm 1.33x.",
                ],
                [
                    "title" => "Data",
                    "text" =>
                        "Genetiikka, metylaatio, sukututkimus, pitkäikäisyys. Osakemarkkinat ja portfolioanalyysi.",
                ],
            ],

            "gear" => [
                [
                    "label" => "Kamera",
                    "items" => [
                        "Runko" => "Fujifilm X-T5",
                        "Linssi" => "Sirui 35mm 1.33x",
                        "Tyyli" => "Anamorfinen",
                    ],
                ],
                [
                    "label" => "Infra",
                    "items" => [
                        "Palvelin" => "TrueNAS + Hetzner",
                        "Verkko" => "Tailscale",
                        "Deploy" => "Docker + Caddy",
                    ],
                ],
            ],

            "posts" => [
                [
                    "date" => "1.3.2026",
                    "title" => "Jälkimietteitä — dividends-o-matic.com",
                    "url" => "/posts/jalkimietteita-dividends-o-matic-com",
                    "excerpt" =>
                        "Oon tuota himmeliäni nyt koettanut katsella joka suunnasta. Sehän tekee niin kuin sen haluan tekevän.",
                    "tags" => ["Claude Code", "Tekoäly"],
                ],
                [
                    "date" => "24.2.2026",
                    "title" => "Jännän äärellä — Peijakas sentään",
                    "url" => "/posts/jannan-aarella-peijakas-sentaan",
                    "excerpt" =>
                        "Ihmisessä on helposti liikaa sisällä ja ulkona. Huomenna on aika mennä poistamaan vähän.",
                    "tags" => [],
                ],
                [
                    "date" => "22.2.2026",
                    "title" => "dividends-o-matic.com",
                    "url" => "/posts/dividends-o-matic-com",
                    "excerpt" =>
                        "Sai tämänkin vihdoin ulos. Paljon on istuttu ohjailemassa ja pohtimassa miten tämän haluaisi.",
                    "tags" => [],
                ],
                [
                    "date" => "21.2.2026",
                    "title" => "Mitäs tänne kuuluu?",
                    "url" => "/posts/mitas-tanne-kuuluu",
                    "excerpt" =>
                        "Olen tuossa tuon toisen projektin kimpussa ollut. Huomaa kyllä että menee oikeaan suuntaan.",
                    "tags" => [],
                ],
                [
                    "date" => "7.2.2026",
                    "title" => "TrueNAS testissä",
                    "url" => "/posts/truenas-testissa",
                    "excerpt" =>
                        "Kun noita pikkulaitteita nyt on niin, laitetaanpa tällä kertaa TrueNas.",
                    "tags" => ["NAS", "TrueNAS"],
                ],
            ],

            "photos" => collect(range(1, 6))
                ->map(
                    fn(string $i): array => [
                        "src" => sprintf('https://picsum.photos/seed/kallio%s/560/374', $i),
                        "alt" => 'Kuva ' . $i,
                    ],
                )
                ->all(),
        ]);
    }
}
