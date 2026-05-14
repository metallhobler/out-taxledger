<?php

namespace metallhobler\Seat\OUTTaxLedger\Http\Controllers;

use Seat\Web\Http\Controllers\Controller;
use Seat\Eveapi\Models\Character\CharacterInfo;
use Seat\Eveapi\Models\Corporation\CorporationDivision;
use Seat\Eveapi\Models\Corporation\CorporationInfo;
use Seat\Eveapi\Models\Wallet\CorporationWalletJournal;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Js;
use Datatables;

class SeatOutsmartedController extends Controller
{
    public function index()
    {
        $character = auth()->user()->main_character['character_id'];
        //$characters = CharacterHelper::getLinkedCharacters($character);
        $miningdata = DB::table('corp_mining_tax as cm')
            ->select('*') 
            ->join('character_infos as ci', 'ci.character_id', 'cm.character_id')
            ->where('main_character_id', '=', $character)
            ->orderBy('year', 'asc')
            ->orderBy('month', 'asc')
            ->get();
        return view('corpminingtax::corpmininglog', ['miningdata' => $miningdata]);
    }

    public function miningtax()
    {
        $character = auth()->user()->main_character['character_id'];
        //$characters = CharacterHelper::getLinkedCharacters($character);
        $miningdata = DB::table('corp_mining_tax as cm')
            ->select('*') 
            ->join('character_infos as ci', 'ci.character_id', 'cm.character_id')
            ->where('main_character_id', '=', $character)
            ->orderBy('year', 'asc')
            ->orderBy('month', 'asc')
            ->get();
        return view('corpminingtax::corpmininglog', ['miningdata' => $miningdata]);
    }

    public function corprat()
    {
        $character = auth()->user()->main_character['character_id'];
        //$characters = CharacterHelper::getLinkedCharacters($character);
        $miningdata = DB::table('corp_mining_tax as cm')
            ->select('*') 
            ->join('character_infos as ci', 'ci.character_id', 'cm.character_id')
            ->where('main_character_id', '=', $character)
            ->orderBy('year', 'asc')
            ->orderBy('month', 'asc')
            ->get();
        return view('corpminingtax::corpmininglog', ['miningdata' => $miningdata]);
    }

    public function alliancerat()
    {
        $character = auth()->user()->main_character['character_id'];
        //$characters = CharacterHelper::getLinkedCharacters($character);
        $miningdata = DB::table('corp_mining_tax as cm')
            ->select('*') 
            ->join('character_infos as ci', 'ci.character_id', 'cm.character_id')
            ->where('main_character_id', '=', $character)
            ->orderBy('year', 'asc')
            ->orderBy('month', 'asc')
            ->get();
        return view('corpminingtax::corpmininglog', ['miningdata' => $miningdata]);
    }

    public function settings()
    {
        $character = auth()->user()->main_character['character_id'];
        //$characters = CharacterHelper::getLinkedCharacters($character);
        $miningdata = DB::table('corp_mining_tax as cm')
            ->select('*') 
            ->join('character_infos as ci', 'ci.character_id', 'cm.character_id')
            ->where('main_character_id', '=', $character)
            ->orderBy('year', 'asc')
            ->orderBy('month', 'asc')
            ->get();
        return view('corpminingtax::corpmininglog', ['miningdata' => $miningdata]);
    }

    /**
     * @param  \Seat\Eveapi\Models\Corporation\CorporationInfo  $corporation
     * @param  int|null  $year
     * @param  int|null  $month
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getBountyPrizesByMonth(CorporationInfo $corporation, ?int $year = null, ?int $month = null)
    {
        $year = is_null($year) ? date('Y') : $year;
        $month = is_null($month) ? date('m') : $month;

        $group_column = 'second_party_id';
        $ref_types = ['bounty_prizes', 'bounty_prize', 'ess_escrow_transfer', 'corporate_reward_payout', 'agent_mission_reward', 'agent_mission_time_bonus_reward'];

        $periods = $this->getCorporationLedgerPeriods($corporation->corporation_id, $ref_types);
        $entries = $this->getCorporationLedgerByMonth($corporation->corporation_id, $group_column, $ref_types, $year, $month);

        return view('web::corporation.ledger.bounty_prizes',
            compact('periods', 'entries', 'corporation', 'month', 'year'));
    }

    /**
     * @param  int  $corporation_id
     * @param  string[]  $ref_types
     * @return \Seat\Eveapi\Models\Wallet\CorporationWalletJournal[]
     */
    private function getCorporationLedgerPeriods(int $corporation_id, array $ref_types)
    {
        return CorporationWalletJournal::select(DB::raw('DISTINCT EXTRACT(MONTH FROM date) as month, EXTRACT(YEAR FROM date) as year'))
            //->where('corporation_id', $corporation_id)
            ->whereIn('ref_type', $ref_types)
            ->orderBy('year', 'desc')
            ->orderBy('month', 'desc')
            ->get();
    }

    /**
     * @param  int  $corporation_id
     * @param  string  $group_field
     * @param  array  $ref_types
     * @param  int|null  $year
     * @param  int|null  $month
     * @return \Illuminate\Support\Collection
     */
    private function getCorporationLedgerByMonth(int $corporation_id,
                                                 string $group_field,
                                                 array $ref_types,
                                                 ?int $year = null,
                                                 ?int $month = null): Collection
    {
        return CorporationWalletJournal::select(DB::raw('ROUND(SUM(amount)) as total'), $group_field)
            //->where('corporation_id', $corporation_id)
            ->whereIn('ref_type', $ref_types)
            ->whereYear('date', ! is_null($year) ? $year : date('Y'))
            ->whereMonth('date', ! is_null($month) ? $month : date('m'))
            ->groupBy($group_field)
            ->orderBy('total', 'desc')
            ->get();
    }
}