{"filter":false,"title":"2020_06_25_090748_create_students_table.php","tooltip":"/warm/database/migrations/2020_06_25_090748_create_students_table.php","undoManager":{"mark":53,"position":53,"stack":[[{"start":{"row":16,"column":12},"end":{"row":17,"column":33},"action":"remove","lines":["$table->increments('id');","            $table->timestamps();"],"id":2},{"start":{"row":16,"column":12},"end":{"row":26,"column":24},"action":"insert","lines":["$table->increments(‘id’);","        $table->string(‘first_name’);","        $table->string(‘last_name’);","       $table->string(‘pw');","        $table->string(‘email');","         $table->unsignedInteger(‘nations_id');","         $table->string(‘year');","         $table->integer(‘life');","       $table->foreign(‘nations_id’)","        ->references(‘id’)","        ->on(‘nations’);"]}],[{"start":{"row":16,"column":8},"end":{"row":16,"column":12},"action":"remove","lines":["    "],"id":3}],[{"start":{"row":16,"column":27},"end":{"row":16,"column":28},"action":"remove","lines":["‘"],"id":4}],[{"start":{"row":16,"column":27},"end":{"row":16,"column":28},"action":"insert","lines":["'"],"id":5}],[{"start":{"row":16,"column":30},"end":{"row":16,"column":31},"action":"remove","lines":["’"],"id":6}],[{"start":{"row":16,"column":30},"end":{"row":16,"column":31},"action":"insert","lines":["'"],"id":7}],[{"start":{"row":17,"column":23},"end":{"row":17,"column":24},"action":"remove","lines":["‘"],"id":8}],[{"start":{"row":17,"column":23},"end":{"row":17,"column":24},"action":"insert","lines":["'"],"id":9}],[{"start":{"row":17,"column":34},"end":{"row":17,"column":35},"action":"remove","lines":["’"],"id":10}],[{"start":{"row":17,"column":34},"end":{"row":17,"column":35},"action":"insert","lines":["'"],"id":11}],[{"start":{"row":18,"column":23},"end":{"row":18,"column":24},"action":"remove","lines":["‘"],"id":12}],[{"start":{"row":18,"column":23},"end":{"row":18,"column":24},"action":"insert","lines":["'"],"id":13}],[{"start":{"row":18,"column":33},"end":{"row":18,"column":34},"action":"remove","lines":["’"],"id":14}],[{"start":{"row":18,"column":33},"end":{"row":18,"column":34},"action":"insert","lines":["'"],"id":15}],[{"start":{"row":17,"column":29},"end":{"row":17,"column":30},"action":"remove","lines":["_"],"id":16}],[{"start":{"row":18,"column":28},"end":{"row":18,"column":29},"action":"remove","lines":["_"],"id":17}],[{"start":{"row":19,"column":22},"end":{"row":19,"column":23},"action":"remove","lines":["‘"],"id":18}],[{"start":{"row":19,"column":22},"end":{"row":19,"column":23},"action":"insert","lines":["'"],"id":19}],[{"start":{"row":19,"column":6},"end":{"row":19,"column":7},"action":"remove","lines":[" "],"id":20},{"start":{"row":19,"column":5},"end":{"row":19,"column":6},"action":"remove","lines":[" "]},{"start":{"row":19,"column":4},"end":{"row":19,"column":5},"action":"remove","lines":[" "]}],[{"start":{"row":19,"column":4},"end":{"row":19,"column":8},"action":"insert","lines":["    "],"id":21}],[{"start":{"row":20,"column":23},"end":{"row":20,"column":24},"action":"remove","lines":["‘"],"id":22}],[{"start":{"row":20,"column":23},"end":{"row":20,"column":24},"action":"insert","lines":["'"],"id":23}],[{"start":{"row":21,"column":8},"end":{"row":21,"column":9},"action":"remove","lines":[" "],"id":24}],[{"start":{"row":21,"column":32},"end":{"row":21,"column":33},"action":"remove","lines":["‘"],"id":25}],[{"start":{"row":21,"column":32},"end":{"row":21,"column":33},"action":"insert","lines":["'"],"id":26}],[{"start":{"row":22,"column":24},"end":{"row":22,"column":25},"action":"remove","lines":["‘"],"id":27}],[{"start":{"row":22,"column":24},"end":{"row":22,"column":25},"action":"insert","lines":["'"],"id":28}],[{"start":{"row":23,"column":25},"end":{"row":23,"column":26},"action":"remove","lines":["‘"],"id":29}],[{"start":{"row":23,"column":25},"end":{"row":23,"column":26},"action":"insert","lines":["'"],"id":30}],[{"start":{"row":22,"column":8},"end":{"row":22,"column":9},"action":"remove","lines":[" "],"id":31}],[{"start":{"row":23,"column":8},"end":{"row":23,"column":9},"action":"remove","lines":[" "],"id":32}],[{"start":{"row":24,"column":7},"end":{"row":24,"column":8},"action":"insert","lines":[" "],"id":33}],[{"start":{"row":24,"column":24},"end":{"row":24,"column":25},"action":"remove","lines":["‘"],"id":34}],[{"start":{"row":24,"column":24},"end":{"row":24,"column":25},"action":"insert","lines":["'"],"id":35}],[{"start":{"row":24,"column":35},"end":{"row":24,"column":36},"action":"remove","lines":["’"],"id":36}],[{"start":{"row":24,"column":35},"end":{"row":24,"column":36},"action":"insert","lines":["'"],"id":37}],[{"start":{"row":25,"column":21},"end":{"row":25,"column":22},"action":"remove","lines":["‘"],"id":38}],[{"start":{"row":25,"column":21},"end":{"row":25,"column":22},"action":"insert","lines":["'"],"id":39}],[{"start":{"row":25,"column":24},"end":{"row":25,"column":25},"action":"remove","lines":["’"],"id":40}],[{"start":{"row":25,"column":24},"end":{"row":25,"column":25},"action":"insert","lines":["'"],"id":41}],[{"start":{"row":26,"column":13},"end":{"row":26,"column":14},"action":"remove","lines":["‘"],"id":42}],[{"start":{"row":26,"column":13},"end":{"row":26,"column":14},"action":"insert","lines":["'"],"id":43}],[{"start":{"row":26,"column":21},"end":{"row":26,"column":22},"action":"remove","lines":["’"],"id":44}],[{"start":{"row":26,"column":21},"end":{"row":26,"column":22},"action":"insert","lines":["'"],"id":45}],[{"start":{"row":20,"column":31},"end":{"row":20,"column":32},"action":"insert","lines":["-"],"id":46},{"start":{"row":20,"column":32},"end":{"row":20,"column":33},"action":"insert","lines":[">"]}],[{"start":{"row":20,"column":33},"end":{"row":20,"column":34},"action":"insert","lines":["u"],"id":47},{"start":{"row":20,"column":34},"end":{"row":20,"column":35},"action":"insert","lines":["n"]},{"start":{"row":20,"column":35},"end":{"row":20,"column":36},"action":"insert","lines":["i"]}],[{"start":{"row":20,"column":33},"end":{"row":20,"column":36},"action":"remove","lines":["uni"],"id":48},{"start":{"row":20,"column":33},"end":{"row":20,"column":39},"action":"insert","lines":["unique"]}],[{"start":{"row":20,"column":39},"end":{"row":20,"column":41},"action":"insert","lines":["()"],"id":49}],[{"start":{"row":20,"column":40},"end":{"row":20,"column":41},"action":"remove","lines":[")"],"id":50},{"start":{"row":20,"column":39},"end":{"row":20,"column":40},"action":"remove","lines":["("]}],[{"start":{"row":20,"column":39},"end":{"row":20,"column":40},"action":"insert","lines":["("],"id":51},{"start":{"row":20,"column":40},"end":{"row":20,"column":41},"action":"insert","lines":[")"]}],[{"start":{"row":23,"column":31},"end":{"row":23,"column":32},"action":"insert","lines":["-"],"id":52},{"start":{"row":23,"column":32},"end":{"row":23,"column":33},"action":"insert","lines":[">"]},{"start":{"row":23,"column":33},"end":{"row":23,"column":34},"action":"insert","lines":["d"]},{"start":{"row":23,"column":34},"end":{"row":23,"column":35},"action":"insert","lines":["e"]}],[{"start":{"row":23,"column":33},"end":{"row":23,"column":35},"action":"remove","lines":["de"],"id":53},{"start":{"row":23,"column":33},"end":{"row":23,"column":40},"action":"insert","lines":["default"]}],[{"start":{"row":23,"column":40},"end":{"row":23,"column":42},"action":"insert","lines":["()"],"id":54}],[{"start":{"row":23,"column":41},"end":{"row":23,"column":42},"action":"insert","lines":["1"],"id":55}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":23,"column":42},"end":{"row":23,"column":42},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1593502312044,"hash":"92310cf2613a4c9538cc27eba641947179ccf665"}