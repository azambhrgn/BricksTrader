function addRow() {
	//alert("add");
	var tab = document.getElementById('mytable');

	var row = tab.rows.length;
	var currentRow = tab.insertRow(row);

	var cell1 = currentRow.insertCell(0);
	cell1.innerHTML = row;
	cell1.setAttribute("class", "col-md-1");
	// insert.setAttribute("name", "links" + currentIndex);
	//Cell 2 Type
	var cell2 = currentRow.insertCell(1);
	//index.innerHTML=row;
	var sitename = document.createElement("input");
	sitename.setAttribute("name", "sitename" + row);
	sitename.setAttribute("class", " form-control");
	sitename.setAttribute("value", "");
	cell2.setAttribute("class", "col-md-1");
	cell2.appendChild(sitename);
	
	var cell3 = currentRow.insertCell(2);
	var area = document.createElement("input");
	area.setAttribute("name", "area" + row);
	area.setAttribute("class", " form-control");
	area.setAttribute("value", "");
	cell3.setAttribute("class", "col-md-1");
	cell3.appendChild(area);
	
	var cell4 = currentRow.insertCell(3);
	var area = document.createElement("input");
	area.setAttribute("name", "area" + row);
	area.setAttribute("class", " form-control");
	area.setAttribute("value", "");
	cell4.setAttribute("class", "col-md-1");
	cell4.appendChild(area);
	
	var cell5 = currentRow.insertCell(4);
	var area = document.createElement("input");
	area.setAttribute("name", "area" + row);
	area.setAttribute("class", " form-control");
	area.setAttribute("value", "");
	cell5.setAttribute("class", "col-md-3");
	cell5.appendChild(area);
	
	var cell6 = currentRow.insertCell(5);
	var area = document.createElement("input");
	area.setAttribute("name", "area" + row);
	area.setAttribute("class", " form-control");
	area.setAttribute("value", "");
	cell6.setAttribute("class", "col-md-2");
	cell6.appendChild(area);
	
	
	var cell7 = currentRow.insertCell(6);
	var area = document.createElement("input");
	area.setAttribute("name", "area" + row);
	area.setAttribute("class", " form-control");
	area.setAttribute("value", "");
	cell7.setAttribute("class", "col-md-2");
	cell7.appendChild(area);
	
	
	

	//cell5 check box

	var cell8 = currentRow.insertCell(7);
	var check = document.createElement("input");
	check.setAttribute("name", "check" + row);
	check.setAttribute("type", "checkbox");
	check.setAttribute("class", "text-right form-control");
	cell8.setAttribute("class", "col-md-1");
	cell8.appendChild(check);
}

function deleteRow() {
	try {
		var tab = document.getElementById('mytable');
		var rowCount = tab.rows.length;
		for (i = 1; i < rowCount; i++) {
			row = tab.rows[i];

			var checkb = row.cells[7].childNodes[0];
			if (checkb != null && checkb.checked == true) {
				tab.deleteRow(i);
				rowCount--;
				i--;
			}

		}

		
	} catch (e) {
		alert(e);
	}
}