<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
  </head>
  <body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Question</th>
            <th scope="col">A1</th>
            <th scope="col">A2</th>
            <th scope="col">A2</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($questions as $question)
              <tr>
                <td>{{ $question->question }}</td>
                <td>{{ $question->answer_a }}</td>
                <td>{{ $question->answer_b }}</td>
                <td>{{ $question->answer_c }}</td>
              </tr>
          @endforeach
        </tbody>
      </table>
  </body>
</html>