<?php
# 用符号*画一个菱形图案.

for($i=0;$i<4;$i++){
    for($j=0;$j<3-$i;$j++){
        echo '&nbsp;';
    }
    for($k=0;$k<$i+1;$k++){
        echo '* ';
    }
    echo "<br/>";
}
for($i=3;$i>=0;$i--) {
    for($x=0;$x<=3-$i;$x++) {
        echo '&nbsp;';
    }
    for($y=0;$y<$i;$y++) {
        echo '* ';
    }
    echo '<br/>';
}
