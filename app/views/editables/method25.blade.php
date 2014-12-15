@extends('layout.master')
 
@section('content')
 
 
<div id="page-wrapper">
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <h2>Edit method</h2>
        </div>
    </div>
 
    <div class="row">
        <div class="col-lg-12">
                <p><b> {{$array['section']->sname}} </b></p>
                <pIndent1>{{$array['subsection']->ssname}}</pIndent1>
                <pIndent2>{{$array['method']->mname}} </pIndent2>
        </div>
    </div>
 
    <div class="panel panel-default">
        <div class="panel body">
            (You can combine categories, however use up to three affirmations in total.)<br>
            {{Form::open(array('url' => 'method25')) }}
            <form role="form">
                <textarea name="text1" value="Allow your entire self to respond spontaneously and effortlessly to what I say...." rows=1 cols=100 readonly>Allow your entire self to respond spontaneously and effortlessly to what I say....</textarea><br>
                General Affirmations:<br>
                <input type="checkbox" name="checkgroup[]" value="I am released from my self-image to explore, expand and experience the infinite potential unfolding from within me."> I am released from my self-image to explore, expand and experience the infinite potential unfolding from within me.<br>
                <input type="checkbox" name="checkgroup[]" value="My source is silent stillness. I rest in peace."> My source is silent stillness. I rest in peace.<br>
                <input type="checkbox" name="checkgroup[]" value="I am the non-participative observer, separate from my thoughts and emotions that come and go."> I am the non-participative observer, separate from my thoughts and emotions that come and go.<br>
                <input type="checkbox" name="checkgroup[]" value="I hold no one responsible for all that has happened in the past. I am free and clear of all that has happened in the past."> I hold no one responsible for all that has happened in the past. I am free and clear of all that has happened in the past.<br>
                <input type="checkbox" name="checkgroup[]" value="I go to the source within that heals all conflicts and restores my health and peace of mind."> I go to the source within that heals all conflicts and restores my health and peace of mind.<br>
                <input type="checkbox" name="checkgroup[]" value="I am at peace with myself as I am, and the world as it is."> I am at peace with myself as I am, and the world as it is.<br>
                <input type="checkbox" name="checkgroup[]" value="I remain completely relaxed and receptive regardless of the end result."> I remain completely relaxed and receptive regardless of the end result.<br>
                <input type="checkbox" name="checkgroup[]" value="I step into the total and complete acceptance of what is."> I step into the total and complete acceptance of what is.<br>
                <input type="checkbox" name="checkgroup[]" value="I am at peace regardless of what I do, where I go, or what happens."> I am at peace regardless of what I do, where I go, or what happens.<br>
                <input type="checkbox" name="checkgroup[]" value="I drop all anxiety and fear and replace it with faith and trust."> I drop all anxiety and fear and replace it with faith and trust.<br>
                <input type="checkbox" name="checkgroup[]" value="I disengage from my habitual resistance to pain and the fear that accompanies it."> I disengage from my habitual resistance to pain and the fear that accompanies it.<br>
                <input type="checkbox" name="checkgroup[]" value="I am whole and complete as I am."> I am whole and complete as I am.<br>
                <input type="checkbox" name="checkgroup[]" value="I draw nourishment from the gifts already present in my life."> I draw nourishment from the gifts already present in my life.<br>
                <input type="checkbox" name="checkgroup[]" value="I am clear and confident, strong and powerful."> I am clear and confident, strong and powerful.<br>
                <input type="checkbox" name="checkgroup[]" value="I face all challenges with equanimity and dignity."> I face all challenges with equanimity and dignity.<br>
                <input type="checkbox" name="checkgroup[]" value="I care for my body, my unfailing companion."> I care for my body, my unfailing companion.<br>
                <input type="checkbox" name="checkgroup[]" value="I let go of that which I cannot control."> I let go of that which I cannot control.<br>
                <input type="checkbox" name="checkgroup[]" value="I am steady in the midst of life situations."> I am steady in the midst of life situations.<br>
                <input type="checkbox" name="checkgroup[]" value="I am a loving presence to those I encounter."> I am a loving presence to those I encounter.<br>
                <input type="checkbox" name="checkgroup[]" value="I am free and clear of all boundaries and barriers."> I am free and clear of all boundaries and barriers.<br>
                <input type="checkbox" name="checkgroup[]" value="I allow that which is going to go. I allow that which is coming to come."> I allow that which is going to go. I allow that which is coming to come.<br>
                <input type="checkbox" name="checkgroup[]" value="I respond to each moment with calm, clarity and conviction."> I respond to each moment with calm, clarity and conviction.<br>
                <input type="checkbox" name="checkgroup[]" value="I am free to express myself fully."> I am free to express myself fully.<br>
                <input type="checkbox" name="checkgroup[]" value="As I am accepting of others, I am accepting of myself."> As I am accepting of others, I am accepting of myself.<br>
                <input type="checkbox" name="checkgroup[]" value="As I let others be who they are, I let myself be who I am."> As I let others be who they are, I let myself be who I am.<br>
                <input type="checkbox" name="checkgroup[]" value="I stand fully in myself."> I stand fully in myself.<br>
                <input type="checkbox" name="checkgroup[]" value="I automatically attract the highest and best for myself."> I automatically attract the highest and best for myself.<br>
                <input type="checkbox" name="checkgroup[]" value="I trust an abundant universe to fulfill my needs."> I trust an abundant universe to fulfill my needs.<br>
                <input type="checkbox" name="checkgroup[]" value="I am showered with universal abundance."> I am showered with universal abundance.<br>
                <input type="checkbox" name="checkgroup[]" value="I allow love to come to me knowing that I am already whole."> I allow love to come to me knowing that I am already whole.<br>
                <input type="checkbox" name="checkgroup[]" value="I recognize my unique place in the fabric of existence."> I recognize my unique place in the fabric of existence.<br>
                <input type="checkbox" name="checkgroup[]" value="I withdraw from habits that no longer serve me."> I withdraw from habits that no longer serve me.<br>
                <input type="checkbox" name="checkgroup[]" value="As I care for myself I am caring for others."> As I care for myself I am caring for others.<br><br>
                Health and Healing Affirmations:<br>
                <input type="checkbox" name="checkgroup[]" value="I return to the innate wisdom of my body to heal itself. I remain in restful awareness."> I return to the innate wisdom of my body to heal itself. I remain in restful awareness.<br>
                <input type="checkbox" name="checkgroup[]" value="I relax so completely and let go so fully that the inner healing blueprint of my body functions freely and optimally."> I relax so completely and let go so fully that the inner healing blueprint of my body functions freely and optimally.<br>
                <input type="checkbox" name="checkgroup[]" value="I am linked to the self- healing cosmic power of prana, restoring my health and wellbeing."> I am linked to the self- healing cosmic power of prana, restoring my health and wellbeing.<br>
                <input type="checkbox" name="checkgroup[]" value="Now that I have entered the deepest levels of letting go, I have entered a complete state of synergy and balance."> Now that I have entered the deepest levels of letting go, I have entered a complete state of synergy and balance.<br>
                <input type="checkbox" name="checkgroup[]" value="I let the radiant light of love melt and disperse the energy blocks in my body and mind and I replace them with total acceptance and forgiveness."> I let the radiant light of love melt and disperse the energy blocks in my body and mind and I replace them with total acceptance and forgiveness.<br>
                <input type="checkbox" name="checkgroup[]" value="I feel my burden is lifted. I feel complete freedom from managing, controlling or needing anything outside of my Self."> I feel my burden is lifted. I feel complete freedom from managing, controlling or needing anything outside of my Self.<br>
                <input type="checkbox" name="checkgroup[]" value="I reconnect with my inner source of healing and surround those areas in my body in need of healing."> I reconnect with my inner source of healing and surround those areas in my body in need of healing.<br>
                <input type="checkbox" name="checkgroup[]" value="I return to my inner self-healing source of deep stillness and relaxation."> I return to my inner self-healing source of deep stillness and relaxation.<br>
                <input type="checkbox" name="checkgroup[]" value="I disengage from all memory pain held in my body and mind."> I disengage from all memory pain held in my body and mind.<br>
                <input type="checkbox" name="checkgroup[]" value="Every cell in my body is filled with the radiant healing light from within."> Every cell in my body is filled with the radiant healing light from within.<br>
                <input type="checkbox" name="checkgroup[]" value="I enter into silent receptivity and remain unconditionally open to enter into the omnipresent field of mysterious healing forces."> I enter into silent receptivity and remain unconditionally open to enter into the omnipresent field of mysterious healing forces.<br>
                <input type="checkbox" name="checkgroup[]" value="As I focus on the spot between my eyebrows, the healing, transformative power of the pineal gland is reactivated."> As I focus on the spot between my eyebrows, the healing, transformative power of the pineal gland is reactivated.<br>
                <input type="checkbox" name="checkgroup[]" value="I shift out of reactive feelings and allow myself to accept and feel what is in my body. I embrace what is present."> I shift out of reactive feelings and allow myself to accept and feel what is in my body. I embrace what is present.<br>
                <input type="checkbox" name="checkgroup[]" value="I allow my body to create a profound healing shift right now."> I allow my body to create a profound healing shift right now.<br>
                <input type="checkbox" name="checkgroup[]" value="The more fully I let go, the more fully my body can restore its health and well-being."> The more fully I let go, the more fully my body can restore its health and well-being.<br>
                <input type="checkbox" name="checkgroup[]" value="Every cell in my body is bathed in radiant healing energy."> Every cell in my body is bathed in radiant healing energy.<br>
                <input type="checkbox" name="checkgroup[]" value="As I release the past and I am freed from its effects in the present moment."> As I release the past and I am freed from its effects in the present moment.<br>
                <input type="checkbox" name="checkgroup[]" value="I am light, unburdened, and free."> I am light, unburdened, and free.<br>
                <input type="checkbox" name="checkgroup[]" value="I no longer need to hold on to that which is causing dis-ease in my body."> I no longer need to hold on to that which is causing dis-ease in my body.<br>
                <input type="checkbox" name="checkgroup[]" value="The fabric and structure of my body is energetically shifting now."> The fabric and structure of my body is energetically shifting now.<br>
                <input type="checkbox" name="checkgroup[]" value="I release what I no longer need."> I release what I no longer need.<br>
                <input type="checkbox" name="checkgroup[]" value="I am radiant, healthy, and full of life energy."> I am radiant, healthy, and full of life energy.<br>
                <input type="checkbox" name="checkgroup[]" value="I sense a healing presence surrounding and guiding me."> I sense a healing presence surrounding and guiding me.<br>
                <input type="checkbox" name="checkgroup[]" value="My first priority is caring for my peace, health and happiness."> My first priority is caring for my peace, health and happiness.<br>
                <input type="checkbox" name="checkgroup[]" value="I allow the wisdom of my body to create a profound healing shift right now."> I allow the wisdom of my body to create a profound healing shift right now.<br>
                <input type="checkbox" name="checkgroup[]" value="The healing mechanism of my body is now functioning optimally."> The healing mechanism of my body is now functioning optimally.<br>
                <input type="checkbox" name="checkgroup[]" value="The quieter my mind becomes the more profoundly my life energy is restored."> The quieter my mind becomes the more profoundly my life energy is restored.<br>
                <input type="checkbox" name="checkgroup[]" value="I release the need to manage or control anything outside of myself."> I release the need to manage or control anything outside of myself.<br>
                <input type="checkbox" name="checkgroup[]" value="I feel my body deeply rejuvenating itself."> I feel my body deeply rejuvenating itself.<br>
                <input type="checkbox" name="checkgroup[]" value="I experience my body as an ocean of healing energy."> I experience my body as an ocean of healing energy.<br>
                <input type="checkbox" name="checkgroup[]" value="I experience my body in balance, my mind at peace."> I experience my body in balance, my mind at peace.<br>
                <input type="checkbox" name="checkgroup[]" value="I allow the root of any symptoms to be dissolved at this time."> I allow the root of any symptoms to be dissolved at this time.<br>
                <input type="checkbox" name="checkgroup[]" value="With each breath, the healing force in my body becomes stronger."> With each breath, the healing force in my body becomes stronger.<br>
                <input type="checkbox" name="checkgroup[]" value="I reconnect with my inner source of healing."> I reconnect with my inner source of healing.<br>
                <input type="checkbox" name="checkgroup[]" value="I am completely relaxed and at peace in my body, my mind, my heart, and my soul."> I am completely relaxed and at peace in my body, my mind, my heart, and my soul.<br><br>
                Spiritual Affirmations:<br>
                <input type="checkbox" name="checkgroup[]" value="I am the seer, the witness of all that is seen, unaffected by all that is in perpetual change."> I am the seer, the witness of all that is seen, unaffected by all that is in perpetual change.<br>
                <input type="checkbox" name="checkgroup[]" value="In silent witness I am at peace in the midst of chaos. I am stillness in action. I remain changeless in the midst of change."> In silent witness I am at peace in the midst of chaos. I am stillness in action. I remain changeless in the midst of change.<br>
                <input type="checkbox" name="checkgroup[]" value="I experience all events of my life undistorted by my personal bias. I am at peace with myself as I am and the world as it is."> I experience all events of my life undistorted by my personal bias. I am at peace with myself as I am and the world as it is.<br>
                <input type="checkbox" name="checkgroup[]" value="I am liberated from all becoming and live in the power of being that I am."> I am liberated from all becoming and live in the power of being that I am.<br>
                <input type="checkbox" name="checkgroup[]" value="I reside in restful awareness, I am completely at peace with myself."> I reside in restful awareness, I am completely at peace with myself.<br>
                <input type="checkbox" name="checkgroup[]" value="I am a clear channel for the free flow of divine guidance."> I am a clear channel for the free flow of divine guidance.<br>
                <input type="checkbox" name="checkgroup[]" value="I am presence. I see, feel and experience all things as they are."> I am presence. I see, feel and experience all things as they are.<br>
                <input type="checkbox" name="checkgroup[]" value="I am at peace with myself as I am and the world as it is."> I am at peace with myself as I am and the world as it is.<br>
                <input type="checkbox" name="checkgroup[]" value="I am at peace in the midst of disturbance."> I am at peace in the midst of disturbance.<br>
                <input type="checkbox" name="checkgroup[]" value="I have nothing to cling to and nothing to run from."> I have nothing to cling to and nothing to run from.<br>
                <input type="checkbox" name="checkgroup[]" value="I sense the peaceful stillness at my center."> I sense the peaceful stillness at my center.<br>
                <input type="checkbox" name="checkgroup[]" value="I trust what is."> I trust what is.<br>
                <input type="checkbox" name="checkgroup[]" value="I experience fulfillment in each moment as it is."> I experience fulfillment in each moment as it is.<br>
                <input type="checkbox" name="checkgroup[]" value="I dwell in the changeless state of being."> I dwell in the changeless state of being.<br>
                <input type="checkbox" name="checkgroup[]" value="I rest in the divinity deep within. I let it restore my inner peace."> I rest in the divinity deep within. I let it restore my inner peace.<br>
                <input type="checkbox" name="checkgroup[]" value="I am a conduit of universal presence."> I am a conduit of universal presence.<br>
                <input type="checkbox" name="checkgroup[]" value="I am surrounded and guided by universal presence."> I am surrounded and guided by universal presence.<br>
                <input type="checkbox" name="checkgroup[]" value="I release all those who I blame for my unhappiness."> I release all those who I blame for my unhappiness.<br>
                <input type="checkbox" name="checkgroup[]" value="I open my heart completely and surrender fully to what is."> I open my heart completely and surrender fully to what is.<br>
                <input type="checkbox" name="checkgroup[]" value="I remain present and unattached to memories of the past and outcomes of the future."> I remain present and unattached to memories of the past and outcomes of the future.<br>
                <input type="checkbox" name="checkgroup[]" value="I am a silent observer of all that is passing through body and mind."> I am a silent observer of all that is passing through body and mind.<br>
                <input type="checkbox" name="checkgroup[]" value="I am the seer of all that is seen, unaffected by all that is in constant flux."> I am the seer of all that is seen, unaffected by all that is in constant flux.<br><br>
                <input type="hidden" name="meth" value={{$array['method']->mid}}>
            </div>
        </div>

    <input type="hidden" name="mid" value={{$array['method']->mid}}>

    <div class="row">
        <div class="col-md-4">
            <input type="submit" class="btn btn-danger" name="submitButton" value="Previous"> 
        </div>
        <div class="col-md-4">
            <input type="submit" class="button-center" name="submitButton" value="Section Summary">
        </div>
        <div class="col-md-4">
            <input type="submit" class="btn btn-danger" style="float:right" name="submitButton" value="Next">
        </div>
    </div>
</div>
 
{{Form::close() }}
@stop