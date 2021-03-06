<?php include 'view/header_admin.php'; ?>
		<div class="right-col col-lg-10 col-md-9 col-sm-9 col-xs-12" style="background-color:#F7F7F7;color:#73879C;">
			<div class="tittle">
				<h3>Quản lý sản phẩm</h3>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="mini-content">
					<div class="title">
						<h2>Danh sách nhóm sản phẩm</h2>
					</div>
					<div class="main-mini-content">
						<table class="table table-striped" id="center-content">
							<thead>
								<tr>
									<th style="width:50px;">&nbsp</th>
								    <th>Tên nhóm sản phẩm</th>
								    <th>Hình ảnh</th>
									<th colspan="2">Sửa đổi</th>
								</tr>
							</thead>
							<?php foreach ($categories as $category) : ?>
								<tr>
									<td>
										<form method="post">
											<input type="hidden" name="action" value="del_nhomsp">
											<label for="<?php echo $category['IdNhomSP']; ?>" class="btn"><i class="fa fa-window-close"></i></label>
	    									<input id="<?php echo $category['IdNhomSP']; ?>" type="submit" name="category_id" value="<?php echo $category['IdNhomSP']; ?>" class="hidden" />
										</form>
									</td>
									<td>
										<a href="?action=ql_sp&category_id=<?php echo $category['IdNhomSP']; ?>&hangsx=0"><?php echo $category['TenNhomSP']; ?></a>
									</td>
									<td>
										<img style="width:100px;" src="../images<?php echo $category['HinhNSP']; ?>">
									</td>
									<td>
										<a href="?action=edit_nsp&category_id=<?php echo $category['IdNhomSP']; ?>"><i class="fa fa-pencil-square-o"></i></a>
									</td>
								</tr>
							<?php endforeach; ?>
						</table>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="mini-content">
					<div class="title">
						<h2>Sửa đổi thông tin nhóm sản phẩm</h2>
					</div>
					<div class="main-mini-content">
						<form class="form-group" method="post">
							<input type="hidden" name="action" value="sua_nhomsp">
							<input type="hidden" name="category_id" value="<?php echo $category_id; ?>">
							<div class="form-group">
								<label for="exampleInputName2">Nhập tên</label>
								<input type="text" class="form-control" name="ten_nhomsp" value="<?php echo $category_name1; ?>">
							</div>
							<div class="form-group">
							    <label for="exampleInputEmail2">Chọn hình</label>
							    <input type="text" class="form-control" name="hinh_nhomsp" value="<?php echo $category_img; ?>">
							</div>
	  						<button type="submit" class="btn btn-primary">Thay đổi</button>
						</form>
					</div>
				</div>
			</div>
			<div class="content col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="mini-content">
					<div class="title">
						<h2>Danh sách sản phẩm >> <?php echo $category_name; ?></h2>
					</div>
					<div class="main-mini-content">
						<table class="table table-striped">
							<thead>
								<tr>
									<th style="width:50px;">&nbsp</th>
								    <th style="width:200px;">Hãng sản xuất</th>
									<th style="width:300px;">Tên sản phẩm</th>
									<th style="width:100px;">Hình Ảnh</th>
									<th style="width:100px;">Giá</th>
									<th>Giảm giá</th>
									<th>Bảo hành</th>
									<th>Thay đổi</th>
								</tr>
							</thead>
							<?php foreach ($products as $product) : ?>
								<tr>
									<td>
										<form method="post">
											<input type="hidden" name="action" value="del_sp">
											<label for="<?php echo $product['IdSP']; ?>"" class="btn"><i class="fa fa-window-close"></i></label>
	    									<input id="<?php echo $product['IdSP']; ?>" type="submit" name="id_sanpham" value="<?php echo $product['IdSP']; ?>" class="hidden" />
										</form>
									</td>
									<td><a href="?action=ql_sp&category_id=<?php echo $product['IdNhomSP'];?>&hangsx=<?php echo $product['HangSX']; ?>"><?php echo $product['HangSX']; ?></a></td>
									<td style="text-align:left;"><?php echo $product['TenSP']; ?></td>
									<td><img style="width:100px;" src="../images<?php echo $product['Hinh']; ?>"></td>
									<td><?php echo $product['Gia']; ?> Đ</td>
									<td><?php echo $product['GiamGia']; ?></td>
									<td><?php echo $product['BaoHanh']; ?></td>
									<td>
										<form method="post">
											<input type="hidden" name="action" value="del_sp">
											<label for="<?php echo $product['IdSP']; ?>"" class="btn"><i class="fa fa-pencil-square-o"></i></label>
	    									<input id="<?php echo $product['IdSP']; ?>" type="submit" name="id_sanpham" value="<?php echo $product['IdSP']; ?>" class="hidden" />
										</form>
									</td>
								</tr>
							<?php endforeach; ?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</content>
</body>
</html>