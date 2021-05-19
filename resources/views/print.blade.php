<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Print</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">

</head>
<body>

<div class="container">
    <div class="row  text-center">
        <div class="col-12 main-name">
            <button type="button" class="btn btn-outline-primary" onClick="window.print()" >
                PRINT
            </button>
            <h1>Curriculum vitae</h1>
        </div>
    </div>

    <hr id="hr-custom">

    <div class="row">
        <div class="col-12 col-md-4" id="left-col-custom">
            <div>
                <h6 class="text-decoration-custom mt-5">Personal information</h6>
                <ul>
                    <li>{{ $user->name }} {{ $user->surname }}</li>
                    <li>{{ $user->phone }}</li>
                    <li>{{ $user->email }}</li>
                </ul>
            </div>


            <div>
                <h6 class="text-decoration-custom mt-5">Address </h6>

                @foreach($user->address as $address)

                    @if($address->home_name)

                        <span>{{ $address->home_name }},</span>
                        <br>
                        <span>{{ $address->country }},</span>
                        <span>{{ $address->city }},</span>
                        <br>
                        <span>{{ $address->postal_code }}</span>

                    @else

                        <span>{{ $address->street }}</span>
                        <span>{{ $address->house_number }}

                            @if($address->flat_number)
                                -{{ $address->flat_number }}
                            @endif

                            ,</span>
                        <br>
                        <span>{{ $address->country }},</span>
                        <span>{{ $address->city }}</span>
                        <br>
                        <span>{{ $address->postal_code }}</span>

                    @endif
                @endforeach

            </div>

        </div>

        <div class="col-12 col-md-8" id="right-col-custom">
            <div class="print-data-sections">
                <h6 class="text-decoration-custom mt-5">Education</h6>

                @foreach($user->educations as $education)

                    <p>
                        <b>School: </b>{{$education->school}}
                        <br>
                        <b>Faculty, field of study: </b>{{$education->school_level}}
                        <br>
                        <b>Status: </b>{{ $education->school_status }}
                        <br>
                        <b>Learning start date: </b>{{ $education->school_startDate }}
                        <br>
                        <b>Learning end date: </b>{{ $education->school_endDate }}
                    </p>

                @endforeach

            </div>
            <div class="print-data-sections">
                <h6 class="text-decoration-custom mt-5">Job experience</h6>

                @foreach($user->experience as $experience)

                    <p>
                        <b>Company name: </b>{{$experience->company}}
                        <br>
                        <b>Position: </b>{{$experience->position}}
                        <br>
                        <b>Stack: </b>{{ $experience->stack }}
                        <br>
                        <b>Job start date: </b>{{ $experience->job_start_date }}
                        <br>
                        <b>Job end date: </b>{{ $experience->job_end_date }}
                        <br>
                        <b>Job description: </b>{{ $experience->description }}
                        <br>
                        <b>Job condition: </b>{{ $experience->job_condition }}
                    </p>

                @endforeach

            </div>

            @if($user->customData)
                @foreach($user->customData as $customData)
                <div class="print-data-sections">
                    <h6 class="text-decoration-custom mt-5">{{ $customData->title }}</h6>
                        <p>
                            {{ $customData->description }}
                        </p>
                </div>

                @endforeach

            @endif
        </div>


    </div>


</div>

<!-- Main page content -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
<!-- Your custom JS goes here -->
</body>
</html>
