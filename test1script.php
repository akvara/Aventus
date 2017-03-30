<?php

// 25 min

define("CORNER", "+");
define("VERTICAL", "|");
define("HORIZONTAL", "-");
define("EMPTY_CELL", ' ');
define("FILLED_CELL", 'X');
define("HORIZONTAL_CELL_SIZE", 5);
define("VERTICAL_CELL_SIZE", 2);

function print_horizontal_border()
{
    for ($i = 1; $i <= HORIZONTAL_CELL_SIZE; $i++)
    {
        echo HORIZONTAL;
    }
}

function print_horizontal_line()
{
    echo CORNER;
    for ($col=1;$col<=8;$col++)
    {
        print_horizontal_border();
        echo CORNER;
    }
    echo PHP_EOL;
}

function print_cell_line($row, $col)
{
    for ($i = 1; $i <= HORIZONTAL_CELL_SIZE; $i++) {
        if (($row + $col) % 2 === 0) {
            echo EMPTY_CELL;
        } else {
            echo FILLED_CELL;
        }
    }
}

function print_board()
{
    for($row = 1; $row <= 8; $row++)
    {
        print_horizontal_line();

        for ($i = 1; $i <= VERTICAL_CELL_SIZE; $i++)
        {
            echo VERTICAL;
            for ($col=1; $col <=8; $col++)
            {
                print_cell_line($row, $col);
                echo VERTICAL;
            }
            echo PHP_EOL;
        }
    }
    print_horizontal_line();
}

print_board();

?>
