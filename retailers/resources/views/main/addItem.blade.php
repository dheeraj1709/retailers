<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<div>
			<meta name="csrf-token" content="{{ csrf_token() }}">

			<form method="POST" action="{{ url('item') }}" enctype="multipart/form-data">
						@csrf

				<div>
					<span>
						<label>Category</label>
					</span>
					<span>
						<select type="text" name="category" placeholder="catgeory">
							@foreach($categories as $category)
								<option class="category_name" value="{{$category->uniqueId}}">{{ $category->name }}</option>
							@endforeach
						</select>
					</span>
				<div>
					<span>
						<label>name</label>
					</span>
					<span>
						<input type="text" name="name" placeholder="name">
					</span>
				<div>
					<span>
						<label>units</label>
					</span>
					<span>
						<input type="text" name="units" placeholder="units">
					</span>
				<div>
					<span>
						<label>pricePerUnit</label>
					</span>
					<span>
						<input type="text" name="generalPrice" placeholder="generalPrice">
					</span>
				</div>
				<div>
					<span>
						<label>ourPrice</label>
					</span>
					<span>
						<input type="text" name="ourPrice" placeholder="ourPrice">
					</span>
				</div>
				<div>
					<span>
						<label>variety</label>
					</span>
					<span>
						<input type="text" name="variety" placeholder="variety">
					</span>
				</div>
				<div>
					<span>
						<label>MRP</label>
					</span>
					<span>
						<input type="text" name="MRP" placeholder="MRP">
					</span>
				</div>
				<div>
					<span>
						<label>description</label>
					</span>
					<span>
						<textarea type="text" name="description" placeholder="description">
						</textarea>
					</span>
				</div>
				<div>
					<span>
						<label>image</label>
					</span>
					<span>
						<input type="FILE" name="image" placeholder="image">
					</span>
				</div>
				<div>
					<span>
						<label>Storable</label>
					</span>
					<span>
						<select type="text" name="storableYN" placeholder="storableYN">
							<option value="0">No</option>
							<option value="1">Yes</option>
						</select>
					</span>
				</div>
				<div>
					<span>
						<label>Storage Duration</label>
					</span>
					<span>
						<input type="text" name="storageDuration" placeholder="storageDuration">
					</span>
				</div>
				<div>
					<span>
						<label>Storage Type</label>
					</span>
					<span>
						<input type="text" name="storageType" placeholder="storageType">
					</span>
				</div>
				<div>
					<span>
						<label>precautions</label>
					</span>
					<span>
						<textarea type="text" name="precautions" placeholder="precautions"></textarea>
					</span>
				</div>
				<div>
					<span>
						<input type="submit" name="">
					</span>
				</div>
			</form>
		</div>
	</div>
</body>
</html>

<?php 

$quotes = ["There will be a day when I no longer can do this. THAT DAY IS NOT TODAY.",

"Your friends should motivate and inspire you. Your circle should be well rounded and supportive. Keep it tight. Quality over quantity, always.",

"Don’t make change too complicated. Just begin.",

"YOU are the creator of your own destiny.",

"If you don’t go after what you want, you’ll never have it. If you don’t ask, the answer is always no. If you don’t step forward, you’re always in the same place.",

"This is the start of something beautiful.",

"Don’t let small minds convince you that your dreams are too big.",

"The temptation to quit will be greatest just before you are about to succeed.",

"Never give up on a dream just because of the time it will take to accomplish it. The time will pass anyway.", 

"Ask yourself if what you’re doing today is getting you closer to where you want to be tomorrow.",

"The greatest pleasure in life is doing what people say you cannot do.",

"I don’t stop when I’m tired. I stop when I’m done.",

"I am a fighter, not a quitter.",

"You have the patience, the strength and the passion to achieve your ambitions, your goals and your dreams. All you need to do now is TRY.",

"Sometimes it’s not how good you are, but how bad you want it. ",


"Life is Wonderful. Enjoy it."];

	echo "<h3>".$quotes[rand(0,15)] . "</h3>";
?>