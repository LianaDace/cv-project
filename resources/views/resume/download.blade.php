<!doctype html>
<html lang="en">
<head>

    <meta http-equiv="Content-Type" content="text/html charset=utf-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        *{
            font-family: DejaVu Sans, serif !important;}
    </style>
    <link rel="stylesheet" href="resources/css/app.css">
</head>
<body>
 <page size="A4">
            <div class="header">
                <p class="username">{{$resume->name}}</p>
                <p class="occupation">{{$resume->occupation}}</p>
                <p class="about">{{ $resume->about }}</p>

            </div>


            <br>
            <div class="box">
                <p class="box-title">Kontaktinformācija</p>

                <ul class="list">

                    <li>Vārds, uzvārds: {{$resume->name}}</li>
                    <li>Telefona nr: {{$resume->phone}}</li>
                    <li>E-pasts: {{$resume->email}}</li>
                    <li>Dzīves vieta: {{$resume->city}}</li>
                    <li>Pasta indekss: {{$resume->postal_code}}</li>
                </ul>
            </div>
            <br>
            <hr>
            <div class="box">
                <p class="box-title">Izglītība</p>

                <ul class="list">
                    <li>Izglītības iestādes nosaukums: {{$resume->school_name}}</li>
                    <li>Studiju virziens: {{$resume->field_of_study}}</li>
                    <li>Izglītības līmenis: {{$resume->degree}}</li>
                    <li>Mācību uzsākšanas datums: {{$resume->graduation_start_date}}</li>
                    <li>Mācību beigu datums: {{$resume->graduation_date}}</li>
                </ul>
            </div>
            <br>
            <hr>
            <div class="box">
                <p class="box-title">Darba pieredze</p>

                <ul class="list">
                    <li>Nodarbošanās: </li>: {{$resume->job_title}}</li>
                    <li>Darba apraksts: {{$resume->degree}}</li>
                    <li>Slodze: {{$resume->workload}}</li>
                    <li>Sākuma datums: {{$resume->start_date}}</li>
                    <li>Beigu datums: {{$resume->end_date}}</li>
                </ul>
            </div>
            <br>
            <hr class="pt-3">
            <div class="box">
                <p class="box-title">Par mani</p>

                <ul class="list">
                    <li>Intereses: {{$resume->interests}}</li>
                    <li>Hobiji: {{$resume->hobbies}}</li>
                </ul>

            </div>
        </page>
</body>
</html>