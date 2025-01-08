<?php


    // Creating an Array in PHP

        // 1. Using array() function
            $colors = array("Red", "Green", "Blue");


        // 2. Using "[]" square brackets
            $colors = ["Red", "Green", "Blue"];



    // Types of Arrays

        // 1. Indexed Array 
            // Stores values with numeric indices - starting from 0 by default 
            $fruits = ["Apple", "Banana", "Cherry"];
            // Or using the array() function to define an indexed array
            $fruits = array("Apple", "Banana", "Cherry");
            echo $fruits[0]; // Output: Apple
            echo $fruits[1]; // Output: Banana


        // 2. Associative Array
            // Uses key-value pairs i.e named keys (strings) instead of numeric indices
            $person = [
                "name" => "Avishek",
                "age" => 30,
                "city" => "New York"
            ];
            echo $person["name"]; // Output: Avishek
            echo $person["city"]; // Output: New York


        // 3. Multidimentional Array
            // Contains arrays within an array and is useful for complex data structures like matrices and tables
            $people = [
                ["name" => "John", "age" => 30],
                ["name" => "Alice", "age" => 25],
                ["name" => "Bob", "age" => 35]
            ];
            echo $people[0]["name"]; // Output: John
            echo $people[1]["age"];  // Output: 25
 


	// Array Functions ( Built-in array functions in PHP)

		// 1. Adding Elements 
		
			// a. array_push() : Adds one or more elements to the end
			$colors = ["Red", "Green"];
			array_push($colors, "Blue", "Yellow");
			print_r($colors); // Output: ["Red", "Green", "Blue", "Yellow"]
			// NOTE: print_r() function in PHP is used to print human-readable information about a variable, especially arrays and objects

			// b. Direct Assignment : Add elements using a specific index or append
			$colors[] = "Purple"; // Appends to the array


		// 2. Removing Elements

			// a. array_pop() : Removes and returns the last element.
			$colors = ["Red", "Green", "Blue"];
			$last = array_pop($colors);

			// b. array_shift() : Removes and returns the first element
			$removedColors = array_shift($colors);
			echo "Removed Colors: " . $removedColors . "\n"; // Output: Removed Colors: Red

			// c. unset() : Removes an element by key or index
			unset($colors[0]);          // Removes "Red"



		// 3. Sorting Elements

			// a. sort() : Sorts an array in ascending order
			$numbers = [3, 1, 4, 1, 5];
			sort($numbers);
			print_r($numbers); // Output: [1, 1, 3, 4, 5]

			// b. rsort() : Sorts an array in descending order
			$numbers = [3, 1, 4, 1, 5];
			sort($numbers);
			print_r($numbers); // Output: [5, 4, 3, 1, 1]

			// c. asort() : Sorts associative arrays by value, maintaining keys
			$products = [ "laptop" => 1500, "phone" => 800, "tablet" => 1200 ];
			asort($products);
			print_r($products); // Output: [ phone => $800, tablet => $1200, laptop => $1500 ]
				
			// d. ksort() : Sorts associative arrays by key in ascending order while maintaining key-value relationship
			$items = [ "zebra" => 3, "Apple" => 1, "banana" => 2 ];
			ksort($items);
			print_r($items); // Output : [ [Apple] => 1, [banana] => 2, [zebra] => 3 ]



		// 4. Checking Existance 
			// here if the key or value is found then it returns 1 ( i.e true ) else returns nothing ( i.e false indicating value / key is not found )
			
			// a. in_array() : Checks if a value exists in an array
			$fruits = ["Apple", "Banana", "Cherry"];
			echo in_array("Banana", $fruits); // Output: 1 (true)

			// b. array_key_exists() : Checks if a key exists
			$fruits = ["apple" => 3, "banana" => 5, "cherry" => 2];
			echo array_key_exists("banana", $fruits); // Output: 1 (true)
			echo array_key_exists("orange", $fruits); // Output:   (false)



		// 5. Merging Arrays
			
			// a. array_merge(): Merges two or more arrays
				// Example 1: mergeing similar type of array
				$array1 = ["a" => "Apple", "b" => "Banana"];
				$array2 = ["c" => "Cherry"];
				$result = array_merge($array1, $array2);
				print_r($result); // Output: ["a" => "Apple", "b" => "Banana", "c" => "Cherry"]

				// Example 2: mergeing associative array with non-associative array
				$associativeArray = ["name" => "Alice", "age" => 25];
				$normalArray = ["Red", "Blue", "Green"];

				// Using array merge
				$mergedArray = array_merge($associativeArray, $normalArray);
				print_r($mergedArray); // Output: [ [name] => Alice, [age] => 25, [0] => Red, [1] => Blue, [2] => Green ]

				// Using spread operator : It works with indexed values only i.e here keys are lost if any
				$mergedArray = [...$associativeArray, ...$normalArray];
				print_r($mergedArray); // Output : [ [0] => Alice, [1] => 25, [2] => Red, [3] => Blue, [4] => Green ]



		// 6. Splitting and Combining Arrays

			// a. array_chunk(): Splits an array into smaller chunks of specified size and returns multi-dimentional array 
			$numbers = [1, 2, 3, 4, 5, 6, 7, 8];
			$chunks = array_chunk($numbers, 3);
			print_r($chunks); // Output :  [
				// [0] => [
				// 		[0] => 1,
				// 		[1] => 2,
				// 		[2] => 3,
				// ],
				// [1] => [
				// 		[0] => 4,	
				// 		[1] => 5,
				// 		[2] => 6,
				// ],
				// [2] => [
				// 		[0] => 7,
				// 		[1] => 8,
				// ] ]
	
			// b. array_combine() : Combines two arrays into a single associative array
			$keys = ["name", "age"];
			$values = ["John", 30];
			$combined = array_combine($keys, $values);
			print_r($combined); // Output: ["name" => "John", "age" => 30]
			


		// 7. Other common Array Functions

		// Function					->Description
		// count($array)			->Returns the number of elements in an array.
		// array_merge()			->Merges two or more arrays.
		// array_keys($array)		->Returns all the keys of an array.
		// array_values($array)		->Returns all the values of an array.
		// array_reverse($array)	->Reverses the elements of an array.
		// array_unique($array)		->Removes duplicate values from an array.
		// array_search($val, $arr)	->Searches for a value and returns its key.
		// sort($array)				->Sorts an indexed array in ascending order.
		// asort($array)			->Sorts an associative array by value.



	// Superglobals and Arrays

		// 1. Superglobals - 
		// These are associative arrays that store specific types of data, such as form inputs, session data, or server information.
		// they are predefined variables and can be used in functions , classes , files etc without declaring them as global

		// Most common SuperGlobals and their uses : 

			// a. $_GET - Contains data sent via the HTTP GET method and mostly used to access query string parameters in URL
				// URL: http://example.com/index.php?name=Avishek&age=25
				echo $_GET['name']; // Output: Avishek
				echo $_GET['age'];  // Output: 25

			// b. $_POST - Contains data sent via the HTTP POST method and mostly used for processing form submissions securely.
				// <form method="POST" action="process.php">
				// 	<input type="text" name="username">
				// 	<input type="submit" value="Submit">
				// </form>
				echo $_POST['username']; // Output : returns form inputted value having username as input field name

			// c. $_REQUEST - Contains data from both $_GET, $_POST, and $_COOKIE.
				echo $_REQUEST['username']; // Accessible from GET or POST

			// d. $_SESSION - Contains session variables used to store data across multiple pages.
				session_start();
				$_SESSION['user'] = "Avishek";
				echo $_SESSION['user']; // Output: Avishek

			// e. $_COOKIE - Contains data sent via HTTP cookies.
				setcookie("user", "Avishek", time() + (86400 * 30)); // Set a cookie
				echo $_COOKIE['user']; // Output: Avishek

			// f. $_SERVER - Contains information about the server environment and HTTP headers.
				echo $_SERVER['SERVER_NAME']; // Output: localhost or domain name
				echo $_SERVER['REQUEST_URI']; // Output: Current script path

			// g. $_FILES - Contains information about uploaded files.
				// <form method="POST" action="upload.php" enctype="multipart/form-data">
				// 	<input type="file" name="file">
				// 	<input type="submit" value="Upload">
				// </form>
				echo $_FILES['file']['name']; // Outputs the file name

			// h. $_ENV - Contains environment variables passed to the script.
				echo $_ENV['PATH']; // Displays system PATH variable

			// i. $_GLOBALS - Contains all global variables in PHP.
				$name = "John";
				function test() {
					echo $GLOBALS['name']; // Accesses global variable $name
				}
				test(); // Output: John


		// 2. SuperGlobals and Arrays 

			// Most superglobals in PHP are associative arrays, meaning they store key-value pairs
			// $_GET and $_POST store form data with input names as keys.
			// $_FILES stores file upload information using nested associative arrays.
			foreach ($_SERVER as $key => $value) {
				echo "$key: $value\n";
			}




	// NOTE: PHP Associative Arrays
    // PHP does not have any objects like that of javascript
    // In case of php Objects are basically the instances of class_exists

    // so to define a variable having Javascript object like values we need to define Associative Array ( which is closest to Javascript objects)

    // Example for PHP Associative Arrays
    $car = [
        "make" => "Toyota",
        "model" => "Corolla"
    ];
    echo $car["make"]; // Outputs: Toyota
    
    // which is closest to Javascripts below code
    // let car = {
    //     make: "Toyota",
    //     model: "Corolla"
    // };
    

								
