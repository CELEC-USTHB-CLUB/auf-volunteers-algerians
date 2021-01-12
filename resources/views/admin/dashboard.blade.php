@extends("admin.layout")
@section("title", "Dashboard")
@section("content")
		<div class="felx mb-4">
			<livewire:datatable model="App\Models\Volunteer" hide="updated_at" searchable="email, firstname, lastname" exportable />
		</div>
		<div class="felx mt-5 mb-4">
			<hr/>
			<center>
			<canvas id="myChart" style="max-width: 80%;"></canvas>
			</center>
		</div>
		<div class="felx mt-5 mb-4">
			<hr/>
			<p class="text-4xl" style="margin-top: 10%; margin-bottom: 5%; text-decoration: underline;">Les messages</p>
			<table style="width: 100%;">
				<thead>
					<tr>
						<th>Nom complet</th>
						<th>Email</th>
						<th>Le message</th>
					</tr>
				</thead>
				<tbody>
					@foreach($messages as $message)
						<tr>
							<td>{{$message->firstname}} {{$message->lastname}}</td>
							<td><a style="text-decoration: underline;" href="mailto:{{$message->email}}">{{$message->email}}</a></td>
							<td class="bg-emerald-200">{{$message->message}}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>

@endsection
@push("scripts")
	<script type="text/javascript">
		console.log("hi")
		var ctx = document.getElementById('myChart');
		var myChart = new Chart(ctx, {
    	type: 'pie',
    	data: {
        labels: ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', "O+", "O-"],
        datasets: [{
            data: [{{optional($counts->where("blood_group", "A+")->first())->blood_count}}, {{optional($counts->where("blood_group", "A-")->first())->blood_count}}, {{optional($counts->where("blood_group", "B+")->first())->blood_count}}, {{optional($counts->where("blood_group", "B-")->first())->blood_count}}, {{optional($counts->where("blood_group", "AB+")->first())->blood_count}}, {{optional($counts->where("blood_group", "AB-")->first())->blood_count}}, {{optional($counts->where("blood_group", "O+")->first())->blood_count}}, {{optional($counts->where("blood_group", "O-")->first())->blood_count}}],
            backgroundColor: [
                '#ffa3a3',
                '#fa7878',
                '#fa9078',
                '#804133',
                '#bd5381',
                '#eb0e6e',
                '#840eeb',
                '#ffc7eb',
            ],
            borderWidth: 1
        }]
    },
});
	</script>
@endpush