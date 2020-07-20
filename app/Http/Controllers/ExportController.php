<?php

namespace App\Http\Controllers;
use Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderProduct;

class ExportController extends Controller implements FromCollection, WithHeadings
{
	use Exportable;


	public function collection()
	{
		$orders = OrderProduct::all();
		foreach ($orders as $row) {
			$order[] = array(
				'0' => $row->id,
				'1' => $row->name,
				'2' => $row->quantity,
				
				'3' => number_format($row->price),
				'4' => $row->created_at,
				
			);
		}

		return (collect($order));
	}


	public function headings(): array
	{
		return [
			'id',
			'Tên sản phẩm',
			'Số lượng',
			'Tổng',
			
			'Ngày đặt hàng',
			
		];
	}


	public function export(){
		return Excel::download(new ExportController(), 'Hóa đơn.xlsx');
	}
}
