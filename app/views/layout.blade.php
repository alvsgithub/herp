<html>
	<head>

		{{ HTML::style('css/bootstrap.css') }}
		{{ HTML::style('//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css') }}
		{{ HTML::style('http://fonts.googleapis.com/css?family=Abel|Open+Sans:400,600') }}
        {{ HTML::style('css/signin.css') }}

    <style>

        /* http://css-tricks.com/perfect-full-page-background-image/ */

        body {
            padding-top: 20px;
            font-size: 16px;
            font-family: "Open Sans",serif;
            background: transparent;
        }

        h1 {
            font-family: "Abel", Arial, sans-serif;
            font-weight: 400;
            font-size: 40px;
        }

        /* Override B3 .panel adding a subtly transparent background */
        .panel {
            background-color: rgba(255, 255, 255, 0.3);
        }

        .margin-base-vertical {
            margin: 40px 0;
        }

        #footer {
          position: absolute;
          bottom: 0;
          width: 100%;
          height: 40px;
          background-color: transparent;
        }

    </style>

	</head>

</html>