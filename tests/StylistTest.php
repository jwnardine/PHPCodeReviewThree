<<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */
    require_once "src/Stylist.php";
    $server = 'mysql:host=localhost;dbname=hair_salon_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);
    class StylistTest extends PHPunit_Framework_TestCase
    {
        // protected function tearDown()
        // {
        //     Stylist::deleteAll();
        //     Client::deleteAll();
        // }
        function test_getName()
        {
            //Arrange
            $name = "Sandra Styles";
            $test_stylist = new Stylist($name);

            //Act
            $result = $test_stylist->getName();

            //Assert
            $this->assertEquals($name, $result);
        }

        function test_getId()
       {
           //Arrange
           $name = "Sandra Styles";
           $id = 1;
           $test_stylist = new Stylist($name, $id);
           //Act
           $result = $test_stylist->getId();
           //Assert
           $this->assertEquals(true, is_numeric($result));
       }
       function test_save()
       {
            //Arrange
            $name = "Sandra Styles";
            $test_stylist = new Stylist($name);
            $test_stylist->save();
            //Act
            $result = Stylist::getAll();
            //Assert
            $this->assertEquals($test_stylist, $result[0]);
        }
        function test_getAll()
       {
           //Arrange
           $name = "Sandra Styles";
           $name2 = "Michael Styles";
           $test_stylist = new Stylist($name);
           $test_stylist->save();
           $test_stylist2 = new Stylist($name2);
           $test_stylist2->save();
           //Act
           $result = Stylist::getAll();
           //Assert
           $this->assertEquals([$test_stylist, $test_stylist2], $result);
       }
       function test_deleteAll()
       {
            //Arrange
            $name = "Sandra Styles";
            $name2 = "Michael Styles";
            $test_stylist = new Stylist($name);
            $test_stylist->save();
            $test_stylist2 = new Stylist($name2);
            $test_stylist2->save();
            //Act
            Stylist::deleteAll();
            $result = Stylist::getAll();
            //Assert
            $this->assertEquals([], $result);
        }

    }
 ?>
