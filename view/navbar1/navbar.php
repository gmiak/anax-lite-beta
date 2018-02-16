<?php
$navbar = [
    "config" => [
        "navbar-class" => "navbar"
    ],
    "items" => [
        "hem" => [
            "text" => "Hem",
            "route" => $app->url->create(""),
        ],
        "about" => [
            "text" => "About",
            "route" => $app->url->create("about"),
        ],
        "report" => [
            "text" => "Report",
            "route" => $app->url->create("report"),
        ],
    ]
];

?>

<div id="navbar">
  <nav class="navbar">
    <ul>
        <?
        foreach ($navbar as $key => $value) {
          # code...
          if ($key == "items") {
            # code...
            foreach ($value as $keys => $values) {
              # code...
              echo "<li>";
              echo "<a href=";
              echo $values['route'];
              echo ">";
              echo $values['text'];
              echo "</a>";
              echo "</li>";
            }
          }
        }

        ?>
      </ul>
    </nav>
</div>
