{"filter":false,"title":"2020_06_30_073710_create_querys_table.php","tooltip":"/warm/database/migrations/2020_06_30_073710_create_querys_table.php","undoManager":{"mark":16,"position":16,"stack":[[{"start":{"row":16,"column":12},"end":{"row":17,"column":33},"action":"remove","lines":["$table->increments('id');","            $table->timestamps();"],"id":2},{"start":{"row":16,"column":12},"end":{"row":27,"column":33},"action":"insert","lines":["$table->increments('id');","            $table->unsignedInteger('events_id');","            $table->unsignedInteger('students_id');","            $table->boolean('CXL')->default('false');","            $table->timestamps();","            ","            $table->foreign('events_id')","                ->references('id')","                ->on('events');","            $table->foreign('students_id')","                ->references('id')","                ->on('students');"]}],[{"start":{"row":18,"column":51},"end":{"row":19,"column":0},"action":"insert","lines":["",""],"id":3},{"start":{"row":19,"column":0},"end":{"row":19,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":19,"column":12},"end":{"row":19,"column":51},"action":"insert","lines":["$table->unsignedInteger('students_id');"],"id":4}],[{"start":{"row":19,"column":43},"end":{"row":19,"column":44},"action":"remove","lines":["t"],"id":5},{"start":{"row":19,"column":42},"end":{"row":19,"column":43},"action":"remove","lines":["n"]},{"start":{"row":19,"column":41},"end":{"row":19,"column":42},"action":"remove","lines":["e"]},{"start":{"row":19,"column":40},"end":{"row":19,"column":41},"action":"remove","lines":["d"]},{"start":{"row":19,"column":39},"end":{"row":19,"column":40},"action":"remove","lines":["u"]},{"start":{"row":19,"column":38},"end":{"row":19,"column":39},"action":"remove","lines":["t"]},{"start":{"row":19,"column":37},"end":{"row":19,"column":38},"action":"remove","lines":["s"]}],[{"start":{"row":19,"column":37},"end":{"row":19,"column":38},"action":"insert","lines":["t"],"id":6},{"start":{"row":19,"column":38},"end":{"row":19,"column":39},"action":"insert","lines":["e"]},{"start":{"row":19,"column":39},"end":{"row":19,"column":40},"action":"insert","lines":["r"]},{"start":{"row":19,"column":40},"end":{"row":19,"column":41},"action":"insert","lines":["m"]}],[{"start":{"row":20,"column":26},"end":{"row":20,"column":27},"action":"remove","lines":["n"],"id":7},{"start":{"row":20,"column":25},"end":{"row":20,"column":26},"action":"remove","lines":["a"]},{"start":{"row":20,"column":24},"end":{"row":20,"column":25},"action":"remove","lines":["e"]},{"start":{"row":20,"column":23},"end":{"row":20,"column":24},"action":"remove","lines":["l"]},{"start":{"row":20,"column":22},"end":{"row":20,"column":23},"action":"remove","lines":["o"]},{"start":{"row":20,"column":21},"end":{"row":20,"column":22},"action":"remove","lines":["o"]},{"start":{"row":20,"column":20},"end":{"row":20,"column":21},"action":"remove","lines":["b"]}],[{"start":{"row":20,"column":20},"end":{"row":20,"column":21},"action":"insert","lines":["s"],"id":8},{"start":{"row":20,"column":21},"end":{"row":20,"column":22},"action":"insert","lines":["t"]},{"start":{"row":20,"column":22},"end":{"row":20,"column":23},"action":"insert","lines":["r"]},{"start":{"row":20,"column":23},"end":{"row":20,"column":24},"action":"insert","lines":["i"]},{"start":{"row":20,"column":24},"end":{"row":20,"column":25},"action":"insert","lines":["n"]},{"start":{"row":20,"column":25},"end":{"row":20,"column":26},"action":"insert","lines":["g"]}],[{"start":{"row":20,"column":30},"end":{"row":20,"column":31},"action":"remove","lines":["L"],"id":9},{"start":{"row":20,"column":29},"end":{"row":20,"column":30},"action":"remove","lines":["X"]},{"start":{"row":20,"column":28},"end":{"row":20,"column":29},"action":"remove","lines":["C"]}],[{"start":{"row":20,"column":28},"end":{"row":20,"column":32},"action":"insert","lines":["dtls"],"id":10}],[{"start":{"row":20,"column":34},"end":{"row":20,"column":52},"action":"remove","lines":["->default('false')"],"id":11}],[{"start":{"row":28,"column":33},"end":{"row":29,"column":0},"action":"insert","lines":["",""],"id":12},{"start":{"row":29,"column":0},"end":{"row":29,"column":16},"action":"insert","lines":["                "]}],[{"start":{"row":29,"column":12},"end":{"row":29,"column":16},"action":"remove","lines":["    "],"id":13}],[{"start":{"row":29,"column":12},"end":{"row":31,"column":33},"action":"insert","lines":["$table->foreign('students_id')","                ->references('id')","                ->on('students');"],"id":14}],[{"start":{"row":29,"column":36},"end":{"row":29,"column":37},"action":"remove","lines":["s"],"id":15},{"start":{"row":29,"column":35},"end":{"row":29,"column":36},"action":"remove","lines":["t"]},{"start":{"row":29,"column":34},"end":{"row":29,"column":35},"action":"remove","lines":["n"]},{"start":{"row":29,"column":33},"end":{"row":29,"column":34},"action":"remove","lines":["e"]},{"start":{"row":29,"column":32},"end":{"row":29,"column":33},"action":"remove","lines":["d"]},{"start":{"row":29,"column":31},"end":{"row":29,"column":32},"action":"remove","lines":["u"]},{"start":{"row":29,"column":30},"end":{"row":29,"column":31},"action":"remove","lines":["t"]},{"start":{"row":29,"column":29},"end":{"row":29,"column":30},"action":"remove","lines":["s"]}],[{"start":{"row":29,"column":29},"end":{"row":29,"column":30},"action":"insert","lines":["t"],"id":16},{"start":{"row":29,"column":30},"end":{"row":29,"column":31},"action":"insert","lines":["e"]},{"start":{"row":29,"column":31},"end":{"row":29,"column":32},"action":"insert","lines":["r"]},{"start":{"row":29,"column":32},"end":{"row":29,"column":33},"action":"insert","lines":["m"]},{"start":{"row":29,"column":33},"end":{"row":29,"column":34},"action":"insert","lines":["s"]}],[{"start":{"row":31,"column":29},"end":{"row":31,"column":30},"action":"remove","lines":["s"],"id":17},{"start":{"row":31,"column":28},"end":{"row":31,"column":29},"action":"remove","lines":["t"]},{"start":{"row":31,"column":27},"end":{"row":31,"column":28},"action":"remove","lines":["n"]},{"start":{"row":31,"column":26},"end":{"row":31,"column":27},"action":"remove","lines":["e"]},{"start":{"row":31,"column":25},"end":{"row":31,"column":26},"action":"remove","lines":["d"]},{"start":{"row":31,"column":24},"end":{"row":31,"column":25},"action":"remove","lines":["u"]},{"start":{"row":31,"column":23},"end":{"row":31,"column":24},"action":"remove","lines":["t"]},{"start":{"row":31,"column":22},"end":{"row":31,"column":23},"action":"remove","lines":["s"]}],[{"start":{"row":31,"column":22},"end":{"row":31,"column":23},"action":"insert","lines":["t"],"id":18},{"start":{"row":31,"column":23},"end":{"row":31,"column":24},"action":"insert","lines":["e"]},{"start":{"row":31,"column":24},"end":{"row":31,"column":25},"action":"insert","lines":["r"]},{"start":{"row":31,"column":25},"end":{"row":31,"column":26},"action":"insert","lines":["m"]},{"start":{"row":31,"column":26},"end":{"row":31,"column":27},"action":"insert","lines":["s"]}]]},"ace":{"folds":[],"scrolltop":432,"scrollleft":0,"selection":{"start":{"row":16,"column":12},"end":{"row":31,"column":30},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":26,"mode":"ace/mode/php"}},"timestamp":1593505046548,"hash":"c635bc14b588f3e507d510038870baf8482bd8bc"}