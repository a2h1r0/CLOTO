<template>
  <v-container fluid id="content">
    <div class="white--text text-center mb-12 py-8" id="title">
      <h1 class="text-h4 my-4">プログラミングで「伝える」コース</h1>
      <h1 class="text-h4 my-4">{{ title }}</h1>
    </div>

    <p>ようこそClass 0へ。Class 0では、</p>

    <p>「独学」・「プログラミング」について学習していきます。</p>

    <p>
      なぜ、さまざまな学習方法がある中で、一見効率が悪そうにも思える「独学」にこだわるのか。<br />
      そもそもプログロラミングとは何なのか。<br />
      これから始まるプログラミング学習において、根幹となるマインドセットをしていきます。
    </p>

    <p>
      早速手を動かすことを期待していて、もどかしく感じているあなたは非常に将来有望です。<br />
      しかし、プログラミングは決して数ヶ月という単位で終わるようなものではありません。<br />
      早る気持ちを抑えて、一旦これから取り組むことについて深く考えてみましょう。
    </p>

    <ul id="agenda">
      <li>0-0　Class 0</li>
      <li>0-1　目標をどこに置くべきか</li>
      <li>0-2　プログラミングを取り巻く環境</li>
      <li>0-3　CLOTOとは何か</li>
      <li>1-0　独学のすゝめ</li>
      <li>1-1　受動的学習の完全否定</li>
      <li>1-2　アウトプット至上主義</li>
      <li>1-3　自己及び学習管理の徹底</li>
      <li>1-4　積極的交流の奨励</li>
      <li>1-5　自己最適化利用の推奨</li>
      <li>2-0　プログラミング</li>
      <li>2-1　定義</li>
      <li>2-2　歴史</li>
      <li>2-3　種類</li>
      <li>2-4　分類</li>
      <li>2-5　プログラミングと現代社会</li>
      <li>2-6　プログラミングの活用例</li>
      <li>2-7　プログラミングを活かせる職</li>
    </ul>

    <h2 class="text-h4 font-weight-bold">
      <span>目標をどこに置くべきか</span>
    </h2>
    <v-container fluid>
      <p>
        CLOTOのアカウントを作り、実際にClass 0に取り組んでいるあなたは、<br />おそらく「プログラミングを学習したい」と思われていることと思います。
      </p>
      <p>
        さて、この「プログラミングの学習」ですが、目標には何を,どこに置くべきでしょうか。<br />
        就職？転職？フリーランス？それとも趣味？研究？ ある意味では全て正しいのではないでしょうか。
      </p>
      <p>
        それぞれに、何かの目的があってプログラミング学習を始められたこと思います。<br />
        実際に世の中に普及し始めたプログラミング学習支援サービスのほとんどが、<br />
        上記のような目標に向かってカリキュラムを組んでいます。
      </p>
      <p>CLOTOもこうした目標を持つ学習者を支援できる環境でありたいと考えています。</p>
      <p>一方でこうも考えます。</p>
      <p class="font-weight-bolder">「それはプログラミング学習の目標として最適なのか。」</p>
      <p>
        プログラミング学習の直接的な目標＝ゴールはエンジニア就職を果たすことでしょうか。<br />
        転職して収入を上げることでしょうか。研究成果を出すことでしょうか。
      </p>
      <p>
        もちろん間接的に、プログラミング学習を進めた先に、そのような体験が待っていることは間違いありません。<br />
        また強い動機になり得るので具体的なイメージが有ることは重要です。
      </p>
      <p>
        しかしそれはあくまであなたという人間の人生の目標の一つであって、<br />
        目下の目標であるプログラミング学習の目標として最適でしょうか。<br />
        最適な学習の筋道は立つでしょうか。
      </p>
      <p>
        しかしそれはあくまで学習する目的、動機の一つではないでしょうか。<br />
        エンジニア転職を成功させることこそがプログラミング学習のゴールと言えるでしょうか。<br />
        未経験ながらエンジニア就職した人にはプログラミング学習は不要でしょうか。
      </p>
      <p class="font-weight-bolder">答えは明確に言えます。「否」です。</p>
      <p>
        新卒の見込み採用で、エンジニア就職した人にはプログラミング学習は不要でしょうか。 <br />
        これはエンジニアに限ったことではありませんが、<br />
        特にIT業界は技術の変化が速い領域ですのでエンジニア自身にも常に学び続ける姿勢が求められます。
        実際に現役でエンジニアとして活躍されている方々の、ほぼ全員が、<br />
        「プログラミングの勉強はずっと続くから」と口を揃えておっしゃいます。
      </p>
      <p>
        つまり、プログラミング学習のゴールは、<br />
        本来的に就職、転職、案件獲得、と言った人生における区切りとは直接関係のないものなのです。
        そのため、プログラミング学習の目標を、<br />
        「就職」や「転職」、「案件獲得」に置くことは、言語化したものとしてあまり適切とは言えないのです。
      </p>
      <p>CLOTOはこの「プログラミング学習の目標は何か」という本質的な問いに対する答えとして<br /></p>
      <p class="font-weight-bolder">
        「プログラミングを駆使し、新たな価値を創り続けることができるようになること」
      </p>
      <p>
        というものを提唱します。<br />
        何かを「創る」体験を、学習を通じて得る必要があると考えています。
        また、たった一度、何かを創ったとしてもその価値はすぐに他の何かにとって代わられてしまいます。<br />
        だから常に成長し続け、価値を創り続けることが求められるのです。
      </p>

      <p>
        究極的には「スクールでウェブサイトの作り方を学んだ」や「Pythonの参考書を一通りやった。」ということは、<br />
        プログラミング学習のほんの一部でしかないということです。<br />
        目標でなく、過程です。
      </p>
      <p class="font-weight-bolder">
        「どんな価値を創るために何を学び、どうやって技術を身につけるべきかを知っている。」
      </p>

      <p>
        そんな状態を学ぶ体験を、<br />
        あなたのプログラミング学習を通じて得る必要があると考えています。<br />
        そのためには後述する「独学」が欠かせません。
      </p>

      <v-row justify="center" class="mt-10">
        <v-btn dark color="success" @click="$emit('karte-post')">ここまでを記録</v-btn>
      </v-row>
    </v-container>

    <h2 class="text-h4 font-weight-bold">
      <span>プログラミングを取り巻く環境</span>
    </h2>
    <v-container fluid>
      <p>21世紀に入り、プログラミングは人間社会のほぼ全ての領域に影響を及ぼす存在になりました。</p>
      <p>
        現在みなさんがこの記事をご覧になっているPCも、スマートフォンも、<br />
        そこに映るWebサイトやアプリケーションもプログラミングによって動作しています。
      </p>
      <p>
        一見プログラミングとは無関係に見える製造業やサービス業などでも、膨大なデータを分析し、<br />
        サービスを向上させている要因の一つには、やはりプログラミングがあります。<br />
        このように、プログラミングは現代社会の幅広い分野に影響を及ぼしており、もはや必須の存在になりました。
      </p>
      <p>
        かつては日本企業が牽引していた、精密機械の時代も、昨今の米中の巨大IT企業の台頭によって過去のものとなりました。<br />
        21世紀はソフトウェアで溢れる世の中です。
      </p>

      <p class="font-weight-bolder">
        しかし、日本ではそのようなモノの開発に携わるITエンジニア不足が深刻化しています。
      </p>
      <p>
        エンジニア不足は一つの産業の停滞では済まず、先に述べた影響の大きさから、<br />国家の成長にとっても由々しき事態であると言えます。<br />
        このような国際的、国家的な動きの中でプログラミングはここ数年で大きく注目されている学習領域の一つです。
      </p>
      <p>
        そして、ITエンジニアを増やすことが国際競争力に直結するような時代において、その重要度は日に日に増しています。<br />
        欧米諸国に遅れて、義務教育におけるプログラミング学習の必修化もようやく始まりました。<br />
        今後社会に出てくる若者たちは、プログラミングというものを私たちより遥かに身近に感じていくことでしょう。
      </p>

      <p>
        そういった社会の中で活躍し続けることができる人材とはどのような人間、どのようなエンジニアなのでしょうか。それこそが先に述べた、
      </p>
      <p class="font-weight-bolder">
        「プログラミングを駆使し、新たな価値を創り続けることができる」エンジニア
      </p>
      <p>
        ではないでしょうか。<br />
        そして、プログラミングそのものを、目的ではなく、創作活動の一手段として捉える観点から考えると、<br />
        スキルや幅広い視野や発想、創造力、社会性など、これまで以上に総合的な力が求められるでしょう。
      </p>
      <p>
        今、プログラミング学習を学び始めることは非常に意義のあることです。<br />
        幸いなことに学び始める年齢や前職、これまでの文系理系といった価値観もあまり関係ありません。
      </p>
      <p class="font-weight-bolder">
        今、この時が、プログラミング学習を始める最良のタイミングです！
      </p>
      <v-row justify="center" class="mt-10">
        <v-btn dark color="success" @click="$emit('karte-post')">ここまでを記録</v-btn>
      </v-row>
    </v-container>

    <h2 class="text-h4 font-weight-bold">
      <span>CLOTOとは何か</span>
    </h2>
    <v-container fluid>
      <p class="font-weight-bolder">
        CLOTOは「プログラミング独学者のためバーチャル学習施設」です。
      </p>
      <p>
        CLOTOは「プログラミングを駆使し、新たな価値を創り続けることができるようになること」を全体の目標とし、<br />
        それまでの道のりを以下のように分類しています。
      </p>
      <ol>
        <li>「素人期」…プログラミングを学ぼうと志して、プログラミングについて知る期間</li>
        <li>「苦労人前期」…実際に学習を本格化させ、一定レベルのスキル習得を目指す期間</li>
        <li>「苦労人後期」…身につけたスキルを元に、自分独自の成果物を「創る」期間</li>
        <li>「玄人」…実際に新しい価値を「創る」ことができるようになった人のこと</li>
      </ol>
      <p>
        このように段階を定義し、「玄人」を目指す学習環境がCLOTOです。<br />
        CLOTOではあくまで学習者各自の「独学」を主とし、その過程で必要な情報や環境が用意されています。<br />
        上手に使いこなし、「玄人エンジニア」になりましょう！
      </p>
      <v-row justify="center" class="mt-10">
        <v-btn dark color="success" @click="$emit('karte-post')">ここまでを記録</v-btn>
      </v-row>
    </v-container>

    <h2 class="text-h4 font-weight-bold">
      <span>独学のすゝめ</span>
    </h2>
    <v-container fluid>
      <p>
        プログラミング学習の目標を「プログラミングを駆使し、新たな価値を創り続けることができるようになること」と位置付けました。<br />
        ではどうすれば新しい価値を創れるエンジニア、「玄人」になれるのでしょうか。
      </p>
      <p class="font-weight-bolder">そのための手段としてCLOTOは「独学」を推奨しています。</p>
      <p>
        これまでのプログラミング学習では、<br />
        一定のスキルを短期間で習得することを目指して設計されたものが多く、支持されてきました。<br />
        例えばスクーリングや技術習得を目的とする教材や、デジタルサービスです。<br />
        これらは、スキル獲得や、スピード感を持って、<br />
        プログラミングに対して一定の理解を進めることに役立ちます。
      </p>

      <p>
        一方でこれらのサービスが一般化した近年では、様々な問題点も露呈しています。<br />
        転職目的でスクーリングを受けたが、キャリアアップどころか転職すらできない。<br />
        思っていたような就職につながらない。<br />
        スクール卒業後、サービス終了後に次に何をしていいかがわからない。<br />
        このような事態が近年多数見受けられます。
      </p>

      <p>
        これらは決してスクールやサービス側の問題ばかりとはいえません。<br />
        後述しますが、学習者の受け身の学習姿勢が大きな問題であると考えています。
      </p>

      <p>
        しかしエンジニアにとって最も重要な「自ら創意工夫すること」や「苦悩しながらも学び続けること」は各自の努力に委ねられていました。<br />
        つまり、どのような方法で学習していても、<br />
        最終的に、エンジニアとして必要な力を身につけるためには「独学」が必要になるのです。
      </p>
      <p>
        また、プログラミング学習は基本的には現段階において誰からも強いられるものではありません。<br />
        自ら選んで取り組まない限り、プログラミング学習をする必要性はないのです。<br />
        つまり、元来、「独学」的要素を多分に含んでいるのです。
      </p>

      <p class="font-weight-bolder">
        しかし、これこそがプログラミング学習が難しい最大の理由なのです。
      </p>
      <p>
        あなたが学習をやめようと思えば、誰にも遠慮することなく、学習から離れることができる。<br />
        英語や数学のようにできないからと言って親に叱られることもありません。<br />
        こういった中で、自分を律し続け、学び続けなくては、「玄人」になることはできません。
      </p>

      <p>
        まずは、プログラミング学習が本来的に「独学」であるということ。<br />
        そしてそれが非常に難しいということを認識しなくてはなりません。<br />
        この続けることの難しさを踏まえた上でこれらに挑んでいく必要があります。<br />
        また継続的な学習のために、それらの体験は楽しくなくてはなりません。
      </p>

      <p class="font-weight-bolder">
        この学習スタイルをCLOTOは改めて「プログラミング独学」と定義します。
      </p>

      <p>この「プログラミング独学」を充実させる要素は大きく分けて以下の５つです。</p>
      <ol>
        <li>受動的学習姿勢の完全否定</li>
        <li>アウトプット至上主義</li>
        <li>自己及び学習管理の徹底</li>
        <li>積極的交流の奨励</li>
        <li>自己最適化利用の推奨</li>
      </ol>

      <p>これから体系的に一生使える「プログラミング独学」法を学んでいきましょう！</p>
      <v-row justify="center" class="mt-10">
        <v-btn dark color="success" @click="$emit('karte-post')">ここまでを記録</v-btn>
      </v-row>
    </v-container>

    <h2 class="text-h4 font-weight-bold">
      <span>受動学習の完全否定</span>
    </h2>
    <v-container fluid>
      <p>
        「プログラミング独学」を充実させる要素の第一番目として「受動的学習の完全否定」をあげました。
      </p>

      <p>
        CLOTOでは「プログラミング独学」において「受動的な学習姿勢」を完全に否定します。<br />
        この場合における「受動的な学習姿勢」とはいったい何か。それは以下のようなものです。
      </p>

      <ul>
        <li>
          従来の「教える者」「教えられる者」という関係性を前提とし、<br />
          「教えられる者」として独学に向かうような学習姿勢
        </li>
        <li>
          新しく得た知識や情報を、すぐに事項へ移さずに、<br />受け流したり「学びっぱなし」の状態にしてしまう学習姿勢
        </li>
        <li>
          進路や学習内容、方法に対して自分の意思、見解を持たず、<br />
          「誰かが勧めている」といった他者の意見及び見解を、<br />疑いなく採用するような他者依存の学習姿勢
        </li>
        <li>創意工夫を面倒くさがり、「より良いものを創る」ことに消極的な学習姿勢</li>
        <li>
          与えられたもの以上の学習に取り組まず、<br />
          人それぞれに最適な学習が異なることを認めず、<br />
          最初から、「最小限の努力」「効率の良さ」を求めるような学習姿勢
        </li>
      </ul>

      <p>
        このような学習姿勢を「受動的な学習姿勢」と位置付け、独学の質を下げる最大の要因として完全に否定します。<br />
        ではどのような学習姿勢が好ましいのでしょうか。
      </p>

      <p class="font-weight-bolder">それは、素直かつ能動的、積極的な学習姿勢です。</p>

      <p>
        自分が学びたいから学んでいるということを自覚し、学習する過程でのあらゆる選択に意志を持って臨み、<br />
        その結果に対して全ての責任が自身にあることを深く理解していればこそ、<br />
        謙虚で、なおかつパワフルな学習ができるのではないでしょうか。
      </p>
      <v-row justify="center" class="mt-10">
        <v-btn dark color="success" @click="$emit('karte-post')">ここまでを記録</v-btn>
      </v-row>
    </v-container>

    <h2 class="text-h4 font-weight-bold">
      <span>アウトプット至上主義</span>
    </h2>
    <v-container fluid>
      <p>
        第一に「プログラミング独学」を充実させる要素の一つとして「インプットだけでなく、必ずアウトプットをする。」ことをあげました。
      </p>
      <p class="font-weight-bolder">
        プログラミング学習では、アウトプットこそが一番重要と言っても過言ではありません。
      </p>
      <p>
        プログラミングは何かを創るための手段です。<br />
        つまり、プログラミングについての知識をいくら集めたところで、何にもならないのです。<br />
        情報を集めることはもちろん重要です。<br />
        ですがそれ以上に実際に手を動かし、コーディングすること。それらを公開すること。<br />
        これが重要になります。
      </p>

      <p>また、アウトプットにも様々な種類があります。</p>
      <ul>
        <li>インプットしたことをすぐに実践して都度公開すること</li>
        <li>知識を利用して誰かに教えてあげること</li>
        <li>実際に製品やサービスをつくること</li>
      </ul>
      <p>
        などがあります。<br />
        「プログラミング独学」においてこの「アウトプット至上主義」は常に意識し続けましょう。
      </p>
      <p>CLOTOではこれらのアウトプットをスムーズに行うことができる環境を整備していきます。</p>
      <v-row justify="center" class="mt-10">
        <v-btn dark color="success" @click="$emit('karte-post')">ここまでを記録</v-btn>
      </v-row>
    </v-container>

    <h2 class="text-h4 font-weight-bold">
      <span>自己及び学習管理の徹底</span>
    </h2>
    <v-container fluid>
      <p>
        第二に「プログラミング独学」を充実させる要素の一つとして「自己管理、学習管理の徹底」をあげました。
      </p>

      <p>
        まず自己管理ですが、プログラミング独学は腰を据えてどっしりと学習できる環境が重要です。<br />
        何かに追われたり、焦ったりしているような状況はできるだけ回避し、余裕を持ってどっぷりと学習に向かいたいものです。<br />
        些細なことでモチベーションが下がってしまう独学においてこれらの環境を整えることは、何よりも重要かもしれません。
      </p>

      <p>自己管理には大きく三要素あります。それは、</p>
      <p class="font-weight-bolder">「金銭」「時間」「体調」です。</p>
      <p>
        このどれか一つでも欠けてしまうと学習にまっすぐ向かえないような心理状況に陥りやすいです。
      </p>

      <p>
        金銭的余裕は心の余裕を生みます。<br />
        これは当然のことなので、日々の生活が厳しいような状況では、学習の質も下がってしまいがちです。<br />
        どうしても余裕がないのであれば、短期集中して貯金をしてから始めるというのも、<br />
        急がば回れ的思考なのかもしれません。
      </p>

      <p>
        時間はさらに重要です。<br />
        特に独学を進めるには、これまでの日常に定期的に学習時間が割り込んできます。<br />
        しっかりと学習時間を確保するために日々の生活を見直し、律することが必要になります。<br />
        この抵抗をできるだけ少なくするメソッドも紹介していくので取り組んでみてください！
      </p>

      <p>
        体調は最も重要かもしれません。<br />
        体調は心理や学習効率にも影響を及ぼしますし、何しろ体調が悪化すると学習を中断せざるを得なくなったり、<br />
        計画倒れの元にもなったりします。<br />
        まずは、規則正しい生活。特に睡眠を重視して健康管理をしていきましょう。<br />
        こちらもどんどん情報発信していくのでご注目ください！
      </p>

      <p>
        続いて学習管理です。<br />

        「プログラミング独学」が独学たる所以は、<br />
        自分で学習の管理をしながら進めていくことが求められる点にあります。
      </p>
      <v-row justify="center" class="mt-10">
        <v-btn dark color="success" @click="$emit('karte-post')">ここまでを記録</v-btn>
      </v-row>
    </v-container>

    <h2 class="text-h4 font-weight-bold">
      <span>積極的交流の奨励</span>
    </h2>
    <v-container fluid>
      <p>
        第三に「プログラミング独学」を充実させる要素の一つとして「視野を広げる積極的な交流の推奨」をあげました。
      </p>

      <p>
        「プログラミング独学」というと、どうしても、独りでの学習のように思われるかもしれません。
      </p>
      <p class="font-weight-bolder">
        しかしこれは全くの間違いです。それはあくまで「孤学」であって「独学」とは違うものではないでしょうか。
      </p>

      <p>
        他者との交流は、独学には欠かせません。<br />
        先のアウトプットの重要性にも繋がりますが、プログラミングは創作活動の一つです。<br />
        価値を生む作業なので、その先には必ず人間の存在があります。
      </p>

      <p>
        自分1人の知見には限界があります。<br />
        多くの人からアドバイスやフィードバックを受けたり、情報交換をしたりすることで、成長に拍車がかかりますし、<br />
        どのような製品がユーザーに受け入れられるのかといった「勘」や「センス」を磨くことにもつながります。
      </p>

      <p>
        CLOTOでは他者との交流をなるべくストレスなく行えるように製品設計をしていきます。
        どんどん活用して、爆速で成長していきましょう！
      </p>
      <v-row justify="center" class="mt-10">
        <v-btn dark color="success" @click="$emit('karte-post')">ここまでを記録</v-btn>
      </v-row>
    </v-container>

    <h2 class="text-h4 font-weight-bold">
      <span>自己最適化利用の推奨</span>
    </h2>
    <v-container fluid>
      <p>
        CLOTOではサービスや情報発信を通じて、「プログラミング独学」環境をより良いものに整備して参りますが、<br />
        その中でも「独学」であるということを強く意識してください。
      </p>

      <p class="font-weight-bolder">
        「独学」の最大のメリットの１つとして、「自分好みの学習スタイルにカスタマイズできる」ことがあると思います。
      </p>

      <p>
        自分にとって最適な学習効果が得られるように創意工夫することも重要な力です。<br />
        是非CLOTOを使いこなしてみてください！
      </p>
      <v-row justify="center" class="mt-10">
        <v-btn dark color="success" @click="$emit('karte-post')">ここまでを記録</v-btn>
      </v-row>
    </v-container>

    <h2 class="text-h4 font-weight-bold">
      <span>プログラミング</span>
    </h2>
    <v-container fluid>
      <p>さて、私たちがこれから学習していくプログラミングとは一体何なのでしょうか。</p>
      <v-row justify="center" class="mt-10">
        <v-btn dark color="success" @click="$emit('karte-post')">ここまでを記録</v-btn>
      </v-row>
    </v-container>

    <h2 class="text-h4 font-weight-bold">
      <span>定義</span>
    </h2>
    <v-container fluid>
      <p>
        正式にはコンピュータプログラミング。<br />
        「コンピュータプログラムを作成することにより、
        人間の意図した処理を行うようコンピュータに指示を与える行為」と定義されています。
      </p>

      <p>
        プログラマーに理解できる1つ以上のプログラミング言語を用いてアルゴリズムを作成、<br />
        実装したものが機械語に翻訳され、CPUが理解し、指定した処理を実行する。
      </p>

      <p>
        つまりプログラミングとは人間の意図をコンピュータに伝えるための指示書を書く行為と言えます。
      </p>

      <p>
        目的や用途によってプログラミング言語の種類やその実装方法も多岐にわたるため、<br />ひと口にプログラミングと言っても非常に幅の広いものになっています。
      </p>
      <v-row justify="center" class="mt-10">
        <v-btn dark color="success" @click="$emit('karte-post')">ここまでを記録</v-btn>
      </v-row>
    </v-container>

    <h2 class="text-h4 font-weight-bold">
      <span>歴史</span>
    </h2>
    <v-container fluid>
      <p>プログラミングを学ぶにあたっては、その成り立ちを知っておくことも重要でしょう。</p>
      <p>
        プログラミングの発展において無視できないのは、そのプログラミングを実行する機器、<br />
        つまり20世紀以降誕生する電気計算機、すなわちコンピュータとの関わりです。<br />
        こちらも並行して調べると良いでしょう。
      </p>
      <p>
        プログラミング。その成り立ちは、1801年に開発されたジャカート織機に遡ります。<br />
        この織機では布を織るパターンに対応するように規則正しく穴を開けた厚紙を使って、<br />
        一定の布を織ることができるようなものでした。<br />
        また、配列パターンの違うカードを用意することで、異なる布を織ることも容易になったのでした。
      </p>

      <p>
        その後、1830年代にはこれを応用した、パンチカードを使った解析機関が、<br />
        チャールズ・バベッジ(英)によって考案されました。
      </p>

      <p>
        1896年には、ハーマン・ホレリス(米)がTabulating Machine Companyを設立しました。<br />
        これはのちに巨大企業になるIBMの前身です。<br />
        彼はパンチカードの応用で情報処理産業の基礎を作りました。<br />
        タービュレーティングマシンなどの発明は、1906年にプラグボードを追加することにより、<br />
        様々な処理を可能にし始めました。プログラミングの先駆けです。
      </p>

      <p>
        1940年代にはナチスドイツの暗号機、エニグマの解読に挑むためにアラン・チューリング(英)によって、<br />
        暗号解読機bombeや、戦後のチューリングマシンのような電子計算機、<br />つまりコンピュータが生みだされました。
      </p>
      <p>
        1946年には米国陸軍によって砲弾の弾道計算や、<br />
        マンハッタン計画に利用するために開発が進められていた真空管を用いたコンピュータである、<br />
        ENIACが登場しました。
      </p>

      <p>
        その後、ジョン・フォン・ノイマン(米)によって、<br />
        現代のコンピュータの基本的な構成法の原型とも言える、<br />
        ノイマン型という構成が生み出されました(諸説あり)。<br />
        これによりメモリにプログラムを格納できるようになりました。
      </p>

      <p>
        初期のプログラミングは機械語のコードを直接並べることでした。<br />
        電気配線のスイッチによる二進数の入力など今から見れば原始的な方法ではあったものの、<br />
        現代のプログラミングの源流として知っておくべき仕組みと言えるでしょう。
      </p>

      <p>
        しかし、機械語は決して人間にとって扱いやすいものではなかったため、<br />
        機械語をブロック化し、ニーモックという略語をつくることで、<br />
        より人間に理解しやすいものにしようという試みが行われました。<br />
        これがアセンブリ言語の誕生です。<br />
        これにより、プログラマはこれまで機械語で行っていた命令を、<br />
        テキスト形式で行うことができるようになりました。
      </p>

      <p>
        しかし、アセンブリ言語はコンピュータのプロセッサの種類ごとに変わってしまうため、<br />
        他の機種には流用することができませんでした。<br />
        また、簡単な命令にも大量の記述が必要であるという不便さがありました。
      </p>

      <p>
        これらを解決するために生まれたのがプログラミング言語です。<br />
        特定のコンピュータに依存せず、処理をより抽象的に記述することができるようになりました。<br />
        コンパイラという処理系がプログラミング言語のような高水準言語を、<br />
        アセンブリ言語や機械語という低水準言語に翻訳することで、<br />
        プログラマがより、自然言語に近い形で実行プログラムを作成することができるようになったのです。
      </p>

      <p>
        1954年には最初のプログラミング言語の一つであるFORTRANが開発されました。<br />
        1958年にはLISP、1959年にはCOBOLといったプログラミング言語が生まれました。<br />
        COBOLなどは2000年代以降も主要な言語として使われており、<br />
        現代のプログラミングの考え方の源流はすでにこの頃に完成されていたといっても過言ではありません。
      </p>

      <p>
        しかし、FORTRANやCOBOLの開発された時代には、まだまだ機械側が発展しておらず、<br />
        依然としてパンチカードなどでプログラミングを入力していたといいますから驚きです。
      </p>

      <p>
        その後、ハードウェアの進歩に伴って、プログラミング言語も進化を遂げました。<br />
        コンピュータには単純な計算だけではなく、高度で莫大な量の計算や、GUIなどの誕生により、<br />
        複雑なグラフィック処理も求められるようになりました。<br />
        画像や映像、音源などあらゆるもののデジタル化により、多くの用途が生まれました。
      </p>

      <p>
        1980年代以降にはそれまで、IBMなどによる大型の業務用コンピューターがメインであった中、<br />
        AppleやMicrosoftが家庭用パーソナルコンピュータを一般化させたことにより、<br />
        プログラミングを行う、あるいはその恩恵を享受する人口が爆発的に増え、<br />
        プログラミングは加速度的に発展を遂げました。
      </p>

      <p>
        携帯電話やスマートフォンなど、新たな端末も増えたことで、<br />
        それぞれに最適な言語や、逆に、汎用性の高い言語なども生まれました。<br />
        プログラミング言語をより便利に使えるようにしたフレームワークや、<br />
        プログラミング言語ではないものの、併用されるマークアップ言語なども数多く誕生し、<br />
        2021年現在では著名かつ主要なもので250言語ほど。<br />
        開発途上のものやより細かいものを合わせると、10000語近いと言われ、<br />
        正確に数え切れないほど多いと言われています。
      </p>

      <p>
        さらに最近では、ローコードやノーコードといった、<br />
        コーディングを一部、あるいは全てを省略した方法で処理を実行できるような技術も生まれています。<br />
        今後、このまま従来のプログラミングと併用していくのか、<br />
        そのほとんどが置き換わっていくかはまだまだわかりません。
      </p>

      <p>
        AIやディープラーニング、ブロックチェーンや動画編集、<br />
        AR・VRといった最近よく耳にする先進技術のほとんど全てでプログラムが機能しており、<br />
        プログラミングは、現代、そして近未来において、<br />無限の可能性を秘めたモノづくりに欠かせないものとなりました。
      </p>

      <p>
        ここまでがプログラミングの歴史概要です。この歴史をもっと細かく調べれば、<br />
        普段PCを使っているまさにその瞬間に、PCの中で何が起こっており、<br />自分が何をしているのかがよくわかり非常に面白いです。<br />
        ぜひお時間がある時に調べてみてください。
      </p>
      <v-row justify="center" class="mt-10">
        <v-btn dark color="success" @click="$emit('karte-post')">ここまでを記録</v-btn>
      </v-row>
    </v-container>

    <h2 class="text-h4 font-weight-bold">
      <span>種類</span>
    </h2>
    <v-container fluid>
      <p>
        さてプログラミングの歴史でも触れたように、プログラミングの用途が生まれ、<br />
        発展してきた過程において、非常に多くの言語が生まれました。<br />
        これら言語の分類には明確な定義が行われていないものも多く、<br />
        あくまで一説を採用し、分類していることをあらかじめご了承ください。
      </p>

      <p>まず分類する方法としては</p>
      <ul>
        <li>そもそもプログラミング言語か否か。</li>
        <li>機械寄りか人間寄りか。一般に高水準か低水準か。</li>
        <li>実行方法による分類。</li>
        <li>人間側の利用用途による分類。</li>
        <li>手続き型言語か否か。</li>
        <li>オブジェクト指向プログラミングに適しているか。</li>
        <li>構造化プログラミングに適しているか。</li>
        <li>型システムによる分類</li>
        <li>並行言語、非並行言語</li>
        <li>宣言型プログラミングに適しているか。</li>
      </ul>
      <p>など多数あります。</p>

      <p>1つ目の、「そもそもプログラミング言語か否か」という分類です。</p>

      <p class="font-weight-bolder">１. プログラミング言語</p>

      <p>
        プログラミング言語とは、「コンピュータプログラムを記述するための形式言語」です。<br />
        そしてプログラミング言語の特徴の一つにチューリング完全であることが必要です。
      </p>

      <p>
        簡潔にいうと、計算のメカニズムが、プログラミングの歴史の項で登場したチューリングマシンと同様であるか否かです。<br />
        同様であればチューリング完全と言えます。<br />
        こちらは計算可能性理論という難しい話なので詳細は割愛します。<br />
        興味のある方は是非調べてみてください。
      </p>

      <p>
        有名なプログラミング言語としては、C言語, Java, JavaScript, PHP, Python, Swift, Ruby,
        Goなどがあります。<br />
        これらの代表的なものを後ほどさらに分類していきます。
      </p>

      <p class="font-weight-bolder">２. マークアップ言語</p>

      <p>
        プログラミング学習を始める際、最初に耳にする言語の一つにHTMLがあるかと思います。<br />
        HTMLは正式にはHyperText Markup Languageと言って、その名の通り、マークアップ言語といいます。
      </p>

      <p>
        マークアップ言語とは実際にWebページなどでディスプレイに映し出される、<br />
        視覚的表現や文構造を記述するための形式言語です。<br />
        他のプログラミング言語と併記されやすいため、混同されがちですが、<br />
        計算を目的としないため、正確にはプログラミング言語ではありません。
      </p>

      <p class="red--text">
        ※HTMLについてはプログラミングで伝えるコース、<br />プログラミングで創るコースで詳しく学習します。
      </p>

      <p class="font-weight-bolder">3. スタイルシート</p>

      <p>
        HTMLと同時に学習することの多いものにCSSというものがあります。<br />
        こちらは正式にはCascading Style Sheetsと言います。
      </p>

      <p>
        こちらはスタイルシートと言って、<br />
        その名の通り、マークアップ言語などで記述された視覚的表現の構造規定に対し、<br />
        より具体的に見栄えを整える、つまりスタイルを指定する為に用いられます。
      </p>

      <p class="red--text">
        ※CSSについてはプログラミングで伝えるコース、<br />プログラミングで創るコースで詳しく学習します。
      </p>

      <p class="font-weight-bolder">4. フレームワーク</p>

      <p>
        フレームワークとは、プログラミング言語を用いてアプリケーションやシステムを開発する際に、<br />
        必要な機能をあらかじめ用意したライブラリの集まりです。<br />
        つまり厳密にはプログラミング言語を指すのではなく、<br />
        プログラミング言語を使って誰かが作ってくれた「特定の機能を持つそれ単体では実行できないようなプログラムの枠組み（ライブラリ）」を集約したものを指します。
      </p>

      <p>
        Rubyというプログラミング言語に対して、Ruby on Railsというフレームワーク。<br />
        JavaScriptというプログラミング言語に対して、Vue.jsやNode.jsというフレームワークなどがあります。
      </p>

      <p>
        これらを利用することで、開発にかかる時間を大幅に削減できるというメリットがある一方で、<br />
        フレームワークを使いこなせるようになるために一つの言語の習得にかけるのと、<br />
        同程度の学習時間を要することもあり、<br />
        プログラミング学習の一環で、プログラミング言語と同様の重さで扱われているような実態もあります。
      </p>

      <p>
        このようにプログラミング学習の過程で、プログラミング言語と似た扱いを受けているものを、<br />
        あらかじめ、その特徴や利用局面を理解しておくことで、<br />
        自分が何を学習しているのか。アドバイスをくれる人がどの次元の話をしているのかがよくわかるかと思います。
      </p>

      <p>
        マークアップ言語やスタイルシート、各種フレームワークは、<br />
        この先用意されている各コースで詳しく学んでいきます。
      </p>

      <p>
        さて次は、プログラミング言語をより細かく分類していきましょう。<br />
        CLOTO内で学習していても頻繁に多くのプログラミング言語やその良し悪しについての議論が起こると思います。<br />
        有意義な情報を聞き逃したり、全く理解できなかったりして、<br />その場を過ごしてしまうのは非常にもったいないので、<br />
        少し、基礎を学習していきましょう。
      </p>
      <v-row justify="center" class="mt-10">
        <v-btn dark color="success" @click="$emit('karte-post')">ここまでを記録</v-btn>
      </v-row>
    </v-container>

    <h2 class="text-h4 font-weight-bold">
      <span>分類</span>
    </h2>
    <v-container fluid>
      <p>
        一般にプログラミング言語とはコンピュータプログラミング言語を指します。<br />
        それは「コンピュータプログラムを記述するための形式言語」です。<br />
        そして計算可能性理論においてチューリング完全を満たしていることが一つの条件となっています。
      </p>

      <p>さて、前項にてプログラミング言語の分類法として以下のものを挙げました。</p>
      <ul>
        <li>そもそもプログラミング言語か否か。</li>
        <li>機械寄りか人間寄りか。一般に高水準か低水準か。</li>
        <li>実行方法による分類。</li>
        <li>人間側の利用用途による分類。</li>
        <li>手続き型言語か否か。</li>
        <li>オブジェクト指向プログラミングに適しているか。</li>
        <li>構造化プログラミングに適しているか。</li>
        <li>型システムによる分類</li>
        <li>並行言語、非並行言語</li>
        <li>宣言型プログラミングに適しているか。</li>
      </ul>
      <p>など。</p>

      <p>
        1つ目についてはすでに前項で学習したので、<br />
        2つ目以降。プログラミング言語内での分類を見ていきましょう。
      </p>

      <p class="font-weight-bolder">２. 機械寄りか人間寄りか。一般に高水準か低水準か。</p>
      <p>
        まず大きな分類として、この分け方があります。<br />
        コンピュータはその頭脳とも言える、CPU(中央処理装置、中央演算処理装置)で情報を処理します。<br />
        当然人間の作成したプログラムもこちらで処理されます。
      </p>

      <p>
        しかし、プログラミングの歴史でも触れたように、機械はプログラミング言語を直接利用できません。<br />
        機械は機械語という簡単に言えば、バイナリ、つまり二進数で情報を理解し、実行へ移していきます。<br />
        この際にCPUにより近い機械語のような言語を低水準言語と言います。
      </p>

      <p>
        一方で、より抽象度を高くし自然言語を用いて、<br />
        思考している人間に扱い安いよう設計されたプログラミング言語を高水準言語と言います。
      </p>

      <p>
        機械語や、それに近いアセンブリ言語などは低水準言語と呼ばれ、<br />
        C言語やJava、それ以降に誕生した、Web系言語やOS依存の言語などは、<br />
        こちらに入ることがほとんどです。
      </p>

      <p>
        一方で、C言語などの誕生以降に、より抽象度の高い言語が多数生まれたため、<br />
        現在ではC言語を低水準言語と分類する場合もあります。<br />
        相対的に判断されるため、時代や、人によってさまざまに定義されている場合があります。
      </p>

      <p class="font-weight-bolder">３. 実行方法による分類。</p>

      <p>
        こちらはプログラミング言語の実行に関する分類で、
        コンパイラ系とインタプリタ系の二種類があるとされてきました。
      </p>

      <p>
        コンパイラ系は高水準言語によるソースコードを、機械語やアセンブリ言語といった、<br />
        より低水準の言語に変換(コンパイル)するプログラムであるとされてきました。<br />
        ※C言語やHaskell、Rust、COBOLなど。
      </p>

      <p>
        インタプリタ系はソースコードを直接解釈して実行したり、<br />
        何かしらコンパイルされた中間表現を解釈実行したりするような、<br />
        いわゆる解釈実行を伴う言語のことを指していました。<br />
        ※PHPやRubyなど。
      </p>
      <p>
        簡潔にはインタプリタ系は実行を伴うのに対し、コンパイラ系は伴わない解いた解釈のようです。<br />
        そのため、コンパイラ系やインタプリタ系は、正確には正しい表現でありません。<br />
        コンパイラ系の中にも、解釈処理までを実行するものが生まれたり、<br />
        インタプリタはそもそもコンパイラ作成が可能であったりと、<br />
        その分類は非常に曖昧なまま用語だけが浸透してきたようです。
      </p>

      <p>しかし、依然としてこの分類を耳にする機会が多いので、参考までに記載しました。</p>

      <p class="font-weight-bolder">４. 人間側の利用用途による分類。</p>

      <p>
        こちらも現在ではあまり使われなくなっている分類ですが参考までに記載します。<br />
        かつては現在ほど、プログラミング言語の種類も多くなく、またその汎用性も現在ほど高くなく、<br />
        かつ利用される環境も現在ほど多くなかったためにこのような分類が可能でした。
      </p>
      <p>具体的には、</p>

      <ul>
        <li>汎用プログラミング言語</li>
        <li>事務計算用プログラミング言語</li>
        <li>科学技術計算用プログラミング言語</li>
      </ul>

      <p>
        などといった分類があったそうです。<br />
        汎用プログラミング言語という言葉は現在でもよく聞きます。<br />
        JavaやC#、Python、Rubyなどがこれに当たります。
      </p>

      <p class="font-weight-bolder">５. 手続き型言語か否か</p>

      <p>
        プログラミング言語を手続き型言語とそうでないもの(非手続き型言語）とに分類する方法です。<br />
        非手続き型言語の代表としては関数型言語などがあります。
      </p>

      <p>
        手続き型言語とは、手続きの定義とプログラムの構造化を重視している言語と言えます。<br />
        プログラムの基本文にステートメントを採用しているような初期の高水準言語などを指す場合もあります。<br />
        時に命令方プログラミングとも同義とされます。<br />
        モジュール式やオブジェクト指向の導入以前のFORTRANやCOBOL、C言語と言った言語がこれに当たります。
      </p>

      <p class="font-weight-bolder">6. オブジェクト指向プログラミングに適しているか。</p>

      <p>
        オブジェクト指向プログラミングとは、<br />
        関係の強いデータとコードを一つにまとめて、オブジェクトとし、<br />
        それぞれに異なる性質と役割を持たせた様々な定義と、それらを相互に作用させるプロセスの設定を通して、<br />
        プログラム全体を構築するソフトウェア開発手法です。<br />
        モジュールやメソッド、カプセルといった用語もでてくるので詳しく知りたい方はぜひ調べてみてください。
      </p>

      <p>
        これに適しているプログラミング言語をオブジェクト指向言語といい、1967年のSimulaを筆頭に、<br />
        C++やPython、Java、Ruby、JavaScript、C#、Kotlin、TypeScript、Swiftといったものがあり、<br />
        現在主要なプログラミング言語の多くにオブジェクト指向が採用されていることがよくわかります。
      </p>

      <p class="font-weight-bolder">7. 構造化プログラミングに適しているか。</p>

      <p>
        構造化プログラミングとは、<br />
        コンピュータプログラム上での処理の流れを明確化かつ平易にするための手法です。<br />
        一般的には、順接、分岐、反復という三つの制御構造によって処理の流れを記述します。<br />
        これに適したプログラミング言語を構造化プログラミング言語と言います。<br />
        代表的なものにC言語があります。
      </p>

      <p class="font-weight-bolder">８. 型システムによる分類</p>

      <p>
        型システムとはコンピュータプログラミングにおいて、<br />
        プログラム内に様々な「型」という特性を付与する仕組みです。<br />
        整数型や文字列型、関数型と言ったものに分類し、<br />
        同じ型のものに対しては同じ操作が可能であると言ったものです。
      </p>

      <p>
        例えば、”3 + 2”と3 + 2では意味が変わってくるというようなことです。<br />
        前者は””で囲まれていることでこれらを文字列型として扱うため、<br />
        仮にこれを出力した場合、画面には「　3 + 2　」と文字列が出力されます。<br />
        一方で後者は整数型として扱われるため、<br />
        仮にこれを出力した場合、画面には「　5　」という計算の結果が出力される。と言った違いがあるのです。<br />
        細かい規定は学習する言語によって異なるため、学習途中で思い出していただけたらと思います。
      </p>

      <p>
        これらを型付けしている以上、エラーが起きてめちゃくちゃになることを防ぐ必要があります。<br />
        そのために型検査というものが行われます。ここでは詳細を割愛します。
      </p>

      <p>
        この型検査が、プログラムの実行前に行われるものを「静的型付け」と言います。<br />
        対して、プログラム実行過程で型検査を行うものを「動的型付け」と言います。<br />
        また、それぞれに強みや脆弱性があり、言語によって異なるので、<br />
        調べてみると、より深く理解できるのではないかと思います。
      </p>

      <p class="font-weight-bolder">９. 並行言語、非並行言語</p>

      <p>
        スレッドを複数個生成し、並行して管理・処理ができるか否かでこの分類は成り立ちます。<br />
        コンピュータプログラムにおけるスレッドとは、CPU利用の単位を表します。
      </p>

      <p>
        例えばGUI描画とネットワークアクセスなどを用いる複雑な処理の実装をする際に、<br />
        それをシングルスレッドで行うと、どちらかの処理が終わるまで、<br />
        先にはじまった処理がCPUを独占してしまう事態が発生します。<br />
        これではCPUの使用効率が良くないので、スレッドを複数用意し、<br />
        同時に並行して二つの処理を同時に行えるようにしようという発想のもと生まれました。
      </p>

      <p class="font-weight-bolder">10. 宣言型プログラミングに適しているか。</p>
      <p>
        宣言型プログラミングとは、「何を得たいか(What)」と言った対象の定義を宣言してプログラムを構成し、「どうやって(How)」を記述しない手法です。<br />
        出力を得る方法ではなく、出力の性質やあるべき状態を記述することが、「宣言型」と言えます。<br />
        これにより、結果を得る過程に抽象度を持たせることができるなどのメリットがあります。
      </p>

      <p>
        宣言型プログラミング言語の中には、関数型、論理型、制約型と言ったさらなる分類もあります。<br />
        興味のある方は是非調べてみてください。
      </p>

      <p>
        １〜１０まで、プログラミングとプログラミング言語の代表的な分類について学習してきました。<br />
        他にも様々な分類方法やより詳細な分類があったり、また同じ用語でも異なった用いられ方をされていたりと、<br />
        まだまだ未整備な側面の多い分野ですが、おおよその分類は以上のもので可能ではないでしょうか。
      </p>

      <p>
        また、この分類に用いる切り口をパラダイムとも言います。「どこで切っていくか。」ですね。<br />
        つまり、このパラダイムによって、<br />
        あるときは「静的型付け言語」と定義された言語が、「高水準言語」と呼ばれたり、<br />
        「関数型の特徴もあるよね」などと言われたりもするのです。
      </p>

      <p>
        切り口をたくさん知っていることで、<br />
        学習している言語がどのような場面でどのような目的をもって使われている言語なのかを知ることができます。<br />
        これを知っていれば、成果物作成の過程において、全体の設計や、用いる言語の策定などを、<br />
        あらかじめ把握することができます。
      </p>

      <p>
        理論的な話が多く、ほとんどの人は気にせず利用していますが、<br />
        知っておくと何かと便利ですので、お時間ある方はご自身でも調べてもいてください。<br />
        CLOTO内で交流する際に、話題も広がり、<br />
        そこから学びとれる情報の質もきっと上がることでしょう。
      </p>
      <v-row justify="center" class="mt-10">
        <v-btn dark color="success" @click="$emit('karte-post')">ここまでを記録</v-btn>
      </v-row>
    </v-container>

    <h2 class="text-h4 font-weight-bold">
      <span>プログラミングと現代社会</span>
    </h2>
    <v-container fluid>
      <p>
        現代社会においてプログラミングが欠かせないものになってきたことは、すでに触れてきた通りです。<br />
        では、実際にはどのような場面で利用されているのでしょうか。
      </p>

      <p>大きくは以下の7つではないでしょうか。</p>

      <ol>
        <li>ソフトウェアの開発</li>
        <li>ゲームの開発</li>
        <li>Web制作・開発</li>
        <li>データサイエンス</li>
        <li>ブロックチェーン</li>
        <li>電子機器の制御</li>
        <li>その他(各種研究など)</li>
      </ol>

      <p>それぞれをもう少し観にいきましょう。</p>
      <v-row justify="center" class="mt-10">
        <v-btn dark color="success" @click="$emit('karte-post')">ここまでを記録</v-btn>
      </v-row>
    </v-container>

    <h2 class="text-h4 font-weight-bold">
      <span>プログラミングの活用例</span>
    </h2>
    <v-container fluid>
      <p class="font-weight-bolder">1. ソフトウェアの開発</p>

      <p>
        こちらは直接的に思い浮かべやすいのではないでしょうか。<br />
        PCやモバイル端末などの各種アプリケーションや、OSなどの開発、およびその利用局面で用いられています。<br />
        こちらは人や環境によって非常に多くの言語で開発されています。
      </p>

      <p class="font-weight-bolder">2. ゲームの開発</p>

      <p>
        一般的なソフトウェアをより、ビジュアル的にも内容的にも高度で複雑なものが多い。<br />
        また、様々な独自デバイスでの利用があり、一口にゲーム開発といっても幅広いので、<br />
        様々なプログラミング言語、開発方法がある点が特徴的です。
      </p>

      <p>
        有名なものではC#やC++、JavaScriptやRuby、Swiftと言ったプログラミング言語や、<br />
        Unityという、3Dゲーム開発のためのゲームエンジンなどを利用して開発しています。<br />
        VRやARと言った領域技術的にはこちらに近いかもしれません。<br />
        医療に応用されたりと今後の更なる発展が楽しみな領域です。
      </p>

      <p class="font-weight-bolder">3. Web制作・開発</p>

      <p>
        現在巷には、数え切れないほどのWebサイトが溢れています。<br />
        世界中のほとんどの企業や団体がWebサイトやホームページを持っており、<br />
        その他にも多くの情報やコンテンツ、高度な機能を持ったWebサイトであるWebアプリもあります。
      </p>

      <p>
        有名なものではJava、Ruby、PHP、Pythonと言ったプログラミング言語や、HTML、CSS。<br />
        また近年ではPHPを元に作られたWordPressと言ったブログソフトウェアや、<br />
        ノーコード、ローコードツールの普及によって、テンプレートを利用したり、<br />
        その多くの工程を省略したりすることが可能になりました。
      </p>

      <p class="font-weight-bolder">4. データサイエンス</p>

      <p>
        こちらは現在最も注目されている領域の一つです。<br />
        データサイエンスと言っても、表計算それ自体やその応用、あるいはAI、機械学習、<br />
        具体的には電子商取引のデータ管理、画像認識、自動運転、スマートスピーカー、事務の効率化など広い領域です。
      </p>

      <p>PythonやVBA、R、C++などがあります。</p>

      <p class="font-weight-bolder">5. ブロックチェーン</p>

      <p>
        近年注目されている技術にブロックチェーンがあります。<br />
        正確にはブロックチェーンの技術や理論を使ったサービスの開発です。<br />
        特に電子商取引、仮想通貨などへの技術応用が顕著で、それらの領域はフィンテックと呼ばれています。
      </p>

      <p>
        金融に限らず、インターネット上のオリジナルに対する価値保証などにも応用されています。<br />
        例えば、人類初のTweetが売買対象になったような出来事はこの技術の上に成り立っています。
      </p>

      <p class="font-weight-bolder">6. 電子機器の制御</p>

      <p>
        こちらは家電や、工業製品などに組み込み、ソフトウェアでの操作を可能にするものです。<br />
        C++やC#、Java、PHPなどを用いることもあれば、<br />
        より低水準のアセンブリ言語を用いてより直接的にプログラムする場合もあります。
      </p>

      <p>
        Raspberry
        Piなどのシングルボードコンピュータやマイクロコントローラー(略してマイコンと呼ばれることが多い)<br />
        などの言葉を聞いたことがある人は多いかと思います。
      </p>

      <p class="font-weight-bolder">7. その他(各種研究など)</p>

      <p>
        上記の６領域はCLOTOで大きく分類しただけです。<br />
        分類として曖昧な箇所を無理に分けたり、近づけたりもしています。<br />
        もちろん分類としてここに入りらない専門領域などもあるので、<br />
        ぜひ興味を持って調べてみてください。
      </p>
      <v-row justify="center" class="mt-10">
        <v-btn dark color="success" @click="$emit('karte-post')">ここまでを記録</v-btn>
      </v-row>
    </v-container>

    <h2 class="text-h4 font-weight-bold">
      <span>プログラミングを活かせる職</span>
    </h2>
    <v-container fluid>
      <p>プログラミングを活かせる職はたくさんあります。</p>

      <ul>
        <li>システムエンジニア</li>
        <li>webエンジニア</li>
        <li>ソフトウェアエンジニア</li>
        <li>ネイティブアプリケーションエンジニア</li>
        <li>ゲームエンジニア</li>
        <li>汎用系エンジニア</li>
        <li>制御・組み込みエンジニア</li>
        <li>社内情報システムエンジニア</li>
        <li>データサイエンティスト</li>
        <li>フリーランス</li>
        <li>デザイナー</li>
        <li>webデザイナー</li>
        <li>一般職・総合職</li>
        <li>コンサルタント</li>
        <li>起業家</li>
        <li>研究員</li>
        <li>教員</li>
        <li>スクール講師</li>
        <li>Youtuber</li>
        <li>クリエイター</li>
      </ul>

      <p>
        などなど…<br />
        現在、プログラミング技術を活かせる仕事はどんどん増えています。
      </p>
    </v-container>

    <v-row justify="center" class="mb-4">
      <v-btn dark color="primary" @click="$emit('next')">完了（次へ進む）</v-btn>
    </v-row>
  </v-container>
</template>

<script>
export default {
  head: {
    title() {
      return {
        inner: this.title,
      };
    },
  },
  data() {
    return {
      title: 'Class 0', // コンテンツタイトル
      filePath: this.$docs(this.$route.params.roadName, 'class' + Number(this.$route.params.class)), // コンテンツデータのパス
    };
  },
};
</script>
