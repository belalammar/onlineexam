
  
   <option value="<?php echo $category['id'];?>"><?php echo $category['cat_name'];?></option>
			<?php  
		  <center><input type="submit" value="دخول " class="btn btn-primary" /></center>
		</form> 
	  </div>
	  </div>
     <div class="col-sm-4"></div>
    </div>
    
    
    
    
    <!-------
   هنا البروفايل 
    ------------->
	  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>image</th>
      </tr>
    </thead>
    <tbody>
	<?php 
	foreach($profile->data as $prof)
	{?>
      <tr>
        <td><?php echo $prof['id'];?></td>
        <td><?php echo $prof['name'];?></td>
        <td><?php echo $prof['email'];?></td>
        <td><img src="img/<?php echo $prof['img'];  ?>" alt="" width="35px" height="30px" /></td>
      </tr>
    </tbody>
	<?php 	}?>
  </table>
	  
    </div>
    </div>
