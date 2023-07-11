<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        header,
        main {
            margin: 50px 5px;
            text-align: center;
        }

        nav {
            width: 60%;
            margin: 30px auto;
        }

        ul {
            list-style: none;
            display: flex;
            justify-content: space-between;
        }

        a {
            color: blue;
        }
    </style>
</head>

<body>
    <header>

        <h1>HELLO WORLD!</h1>

        <h3>Questa è la homepage di {{ $name }}</h3>

        <nav>
            <ul>

                @foreach ($links as $link)
                    <li><a href={{ route('services') }}> {{ $link }} </a></li>
                @endforeach

            </ul>
        </nav>
    </header>

    <main>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti a doloribus voluptatibus temporibus sunt
            iusto id sequi totam odit aperiam. Id quod perspiciatis necessitatibus dolore, temporibus harum in iste
            sequi?
            Unde temporibus veniam voluptatum nemo non libero officiis fugit repudiandae, mollitia molestias iste
            perspiciatis corporis, corrupti omnis voluptates iure minus rerum sequi ab! Nihil, repellat labore
            cupiditate reprehenderit placeat recusandae.
            Velit repudiandae molestias libero neque? Eaque animi porro provident qui placeat dolorum harum inventore
            repudiandae ea ipsa tempora magni, pariatur beatae rem ut quibusdam accusamus saepe natus. Tenetur, ducimus
            ab.
            Deserunt quos et, eaque voluptates vitae consequatur esse debitis modi ipsam totam repellat obcaecati.
            Voluptatum, recusandae accusamus. Nemo facere, dolores molestias quod expedita tempora, dolore, eum eaque
            autem quia inventore!
            Cum accusamus deleniti unde dicta similique voluptatum delectus sint fugit necessitatibus. Ut veniam laborum
            accusamus impedit dolore ex quas necessitatibus sint dolores veritatis, amet voluptatum vel voluptas
            voluptatibus dignissimos nihil!
            Eius dicta nostrum earum alias iste, veritatis numquam voluptatibus culpa est fuga iure commodi possimus
            atque dolorum. Alias, corporis illum nulla fuga reiciendis quidem incidunt, harum labore at corrupti quod.
            Maiores itaque dignissimos, consequuntur vitae aspernatur explicabo reiciendis sapiente, molestias nobis
            perspiciatis adipisci magnam illo ex nulla, fuga esse delectus ab rem ipsam nostrum incidunt? Facere a
            beatae debitis dolorem.
            Ipsa id velit, ipsum dolor similique repudiandae, minus enim et facilis a soluta harum? Ipsam vel ab ducimus
            maxime ex, exercitationem, sed qui provident similique minus perferendis obcaecati temporibus distinctio!
            Explicabo iusto aperiam neque saepe unde, molestiae pariatur voluptatibus veniam laborum nulla. Earum eum
            eos officiis quam, enim libero vel iusto, architecto maxime repellat in, amet distinctio quia atque alias!
            Quod, maxime nihil quos repellendus iste aut animi fuga eius quis nobis facere. Eius magnam blanditiis
            corrupti temporibus voluptas totam, adipisci, dolorum nihil minima mollitia vel natus sequi nostrum ducimus.
        </p>
    </main>
</body>

</html>
