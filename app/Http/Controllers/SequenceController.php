<?php

namespace App\Http\Controllers;

use App\Sequence;
use Illuminate\Http\Request;

class SequenceController extends Controller
{
    public function index(Request $request)
    {
        $l = Sequence::take(50)->get()->toArray();

        // $field_list = [];
        // foreach ($l as $item) {
        //     foreach ($item as $k => $v) {
        //         $field_list[$k] = true;
        //     }
        // }
        // var_export($field_list);die();

        $field_list = [
          '_id' => true,
          'ir_project_sample_id' => true,
          'ir_annotation_tool' => true,
          'ir_created_at' => true,
          'v_call' => true,
          'd_call' => true,
          'j_call' => true,
          'bestVGene' => true,
          'bestDGene' => true,
          'bestJGene' => true,
          'bestVFamily' => true,
          'bestDFamily' => true,
          'bestJFamily' => true,
          'v_score' => true,
          'd_score' => true,
          'j_score' => true,
          'junction' => true,
          'junction_aa' => true,
          'lengthOfCDR3' => true,
          'readId' => true,
          'sequence' => true,
          'sequence_id' => true,
          'ir_substring' => true,
          'ir_junction_aa_length' => true,
          'junction_length' => true,
          'ir_vgene_gene' => true,
          'ir_vgene_family' => true,
          'ir_jgene_gene' => true,
          'ir_jgene_family' => true,
          'ir_dgene_gene' => true,
          'ir_dgene_family' => true,
          'locus' => true,
          'ir_updated_at' => true,
          'productive' => true,
        ];

        $data = [];
        $data['field_list'] = $field_list;
        $data['item_list'] = $l;

        return view('sequence_list', $data);
    }
}
