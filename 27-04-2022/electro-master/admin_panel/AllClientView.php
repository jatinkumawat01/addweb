<?php 
                        $con=mysqli_connect("localhost","root","","batch6") or die("Error in Connection");
                        $query=mysqli_query($con,"select * from student12 ") or die("Error in query");
                        while($row=mysqli_fetch_array($query))
                        {
                            $isactive=$row["isActive"];
                            if ($isactive==1)
                                $isactive="Active";
                            else{
                                $isactive="Deactivate";
                            }
                            echo "<tr>";
                            echo " <td><i class='fab fa-angular fa-lg text-danger me-3'></i> <strong>".$row["name"]."</strong><br><h7>".$row["email"]."</h7></td>";
                            echo "<td>".$row["mobile"]."</td>";
                            echo "<td>".$row["address"]."</td>";
                            echo "<td>".$row["password"]."</td>";
                            echo "<td><span class='badge bg-label-primary me-1'>$isactive</span></td>";
                            echo "<td><div class='dropdown'>";
                            echo "<a class='dropdown-item' href='C_edit.php?email=".$row['email']."' ><i class='bx bx-edit-alt me-1'></i> Edit</a>";
                            echo "<a class='dropdown-item' href='delete.php?email=".$row['email']."&Tname=student12'><i class='bx bx-trash me-1'></i> Delete</a>";
                            echo "</div></td></tr>";
                        }
                        mysqli_close($con);
                        ?>