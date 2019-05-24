<?php

namespace App\Http\Controllers;

use App\Sample;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index(Request $request)
    {
        $l = Sample::all()->toArray();

        // $field_list = [];
        // foreach ($l as $item) {
        //     foreach ($item as $k => $v) {
        //         $field_list[$k] = true;
        //     }
        // }

        $field_list = [
            'ir_created_at' => true,
            'ir_sequence_count' => true,
            'study_title' => true,
            'study_description' => true,

            'ir_rearrangement_file_name' => true,
            'fasta_file_name' => true,
            'igblast_file_name' => true,
            'imgt_file_name' => true,

            'study_id' => true,
            'inclusion_exclusion_criteria' => true,
            'grants' => true,
            'submitted_by' => true,
            'lab_name' => true,
            'lab_address' => true,
            'collected_by' => true,
            'pub_ids' => true,
            'subject_id' => true,
            'synthetic' => true,
            'organism' => true,
            'sex' => true,
            'age' => true,
            'age_event' => true,
            'ancestry_population' => true,
            'ethnicity' => true,
            'race' => true,
            'strain_name' => true,
            'linked_subjects' => true,
            'link_type' => true,
            'study_group_description' => true,
            'disease_diagnosis' => true,
            'disease_length' => true,
            'disease_stage' => true,
            'prior_therapies' => true,
            'immunogen' => true,
            'intervention' => true,
            'medical_history' => true,
            'sample_id' => true,
            'sample_type' => true,
            'tissue' => true,
            'anatomic_site' => true,
            'disease_state_sample' => true,
            'collection_time_point_relative' => true,
            'collection_time_point_reference' => true,
            'biomaterial_provider' => true,
            'tissue_processing' => true,
            'cell_subset' => true,
            'cell_phenotype' => true,
            'single_cell' => true,
            'cell_number' => true,
            'cells_per_reaction' => true,
            'cell_storage' => true,
            'cell_quality' => true,
            'cell_isolation' => true,
            'cell_processing_protocol' => true,
            'template_class' => true,
            'template_quality' => true,
            'template_amount' => true,
            'library_generation_method' => true,
            'library_generation_protocol' => true,
            'library_generation_kit_version' => true,
            'pcr_target_locus' => true,
            'forward_pcr_primer_target_location' => true,
            'reverse_pcr_primer_target_location' => true,
            'complete_sequences' => true,
            'physical_linkage' => true,
            'total_reads_passing_qc_filter' => true,
            'sequencing_platform' => true,
            'read_length' => true,
            'sequencing_facility' => true,
            'sequencing_run_id' => true,
            'sequencing_run_date' => true,
            'sequencing_kit' => true,
            'software_versions' => true,
            'paired_reads_assembly' => true,
            'quality_thresholds' => true,
            'primer_match_cutoffs' => true,
            'collapsing_method' => true,
            'data_processing_protocols' => true,
            'germline_database' => true,
            'year' => true,
            'accession' => true,
            'bioproject_biosample_id' => true,
            'sra_sample_id' => true,
            'sample_name' => true,
            'library_name' => true,
            'library_source' => true,
            'experiment_name' => true,
            'experiment_id' => true,
            'adapter_sequence_forward ' => true,
            'adapter_sequence_reverse' => true,
            'forward_primers' => true,
            'reverse_primers' => true,
            'receptor_type' => true,
            'heavy_or_light_chain' => true,
            'gene_derivation_heavy' => true,
            'gene_derivation_light' => true,
            'run_id' => true,
            'single_or_paired' => true,
            'regions_included_in_sequence' => true,
            'antigen' => true,
            'spot_descriptor' => true,
            'barcode_1' => true,
            'barcode_2' => true,
            '_id' => true,
            'ir_updated_at' => true,
        ];

        $data = [];
        $data['field_list'] = $field_list;
        $data['item_list'] = $l;

        return view('sample_list', $data);
    }
}
