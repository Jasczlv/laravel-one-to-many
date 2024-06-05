@extends('layouts.app')
@section('content')
    <h1>
        Ciao
    </h1>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>
                        Nome
                    </th>
                    <th>
                        Github
                    </th>
                    <th>Descrizione</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>
                            {{ $project->name }}
                        </td>
                        <td>
                            <a href="{{ $project->giturl }}">Link</a>
                        </td>
                        <td>
                            {{ $project->description }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
