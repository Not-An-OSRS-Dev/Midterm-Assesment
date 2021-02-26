<!-- Page contains form for creating new item -->
<!doctype=html>
<html>
	<body>
		<h1>Welcome to the product creation page!</h1>
		
		<?php 
		
		  $name = "";
		  $designer = "";
		  $year = "";
		  $price = "";
		  
		  if (isset($product))
		  {
		      $name = $product->getName();
		  }
		  if (isset($product))
		  {
		      $designer = $product->getDesigner();
		  }
		  if (isset($product))
		  {
		      $year = $product->getYear();
		  }
		  if (isset($product))
		  {
		      $price = $product->getPrice();
		  }
		  
		?>
		
		<!-- Success or failure message if the page is being redirected -->
		@if (isset($found))
			@if (!$found)
				<h2>CST-256 not found</h2>
			@else
				<h2>CST-256 found</h2>
			@endif
		@endif
	
		<!-- Begin Form -->
		<form action="create" method="post">
			{{ csrf_field() }}
			
			<!-- Begin Name -->
			<label for="name">Enter the item's name</label><br>
			<input type="text" value="{{ $name }}"name="name" id="name" required><br><br>
			
			<!-- Begin Designer -->
			<label for="designer">Enter the name of the designer</label><br>
			<input type="text" name="designer" value="{{ $designer }}" id="designer" required><br><br>
			
			<!-- Begin Year -->
			<label for="year">Enter the year the item was made</label><br>
			<input type="text" name="year" value="{{ $year }}" id="year" required><br><br>
			
			<!-- Begin Price -->
			<label for="price">Enter the price of the item</label><br>
			<input type="text" name="price" id="price" value="{{ $price }}" required><br><br>
			
			<input type="submit" value="submit"/>
		</form>
	</body>
</html>